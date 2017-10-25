<?php

function inclusionAutomatique($nomDeLaClass)
{
  include_once($nomDeLaClass . '.class.php');
  echo 'On passe dans inclusionAutomatique. <br>';
  echo 'require($nomDeLaClass.class.php);<hr>';
}
spl_autoload_register('inclusionAutomatique');

// Permet d'éxecuter une fonction lorsque l'interpreteur voit passer un 'new' dasn le code. le nom à droite du 'new'(nom de la class) est passé automatiquement en argument de cette fonction.

$a = new A;
$b = new B;
$c = new C;
$d = new D;
