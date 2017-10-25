<?php

class  A
{
  // Déclaration de calcul() dans la class mère
  public function calcul()
  {
    return 10;
  }
}

class B extends A
{
  //Redéclaration de calcul() dans la classe fille
  public function calcul()
  {
    //parent :: permet d'accder à la classe parente ( en l'occurence la classe A) puis d'accéder à une lméthode. En l'occurence calcul.
    // Je stocke ensuite le résultat pour le réutiliser
    $resultat = parent::calcul();
    return $resultat + 5;
  }
}
