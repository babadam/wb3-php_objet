<?php

final class Application // pas extensible: cette class ne pourra pas être héritée. Pour protéger le code, on veut pas qu'il soit modifié
{
  public function launchApp()
  {
    return "L'app s'est lancée.";
  }
}

// provoque une erreur
// class Extension extends Application{}
$app = new Application; // la class est instanciable
echo $app->launchApp();

class App
{
  final public function launchApp() // pas le droit de la réécrire
  {
    return "L'app se lance.";
  }
}

class Extension2 extends App
{
  //provoque une erreur car on ne peut pas réécrire la fonction déclarer final dans class App
  public function launchApp();
}
