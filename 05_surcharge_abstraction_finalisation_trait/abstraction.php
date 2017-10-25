<?php

abstract class Joueur // abstract signifie que je vais trouver de sméthodes abstraites dans la classe
{
  public function seConnecter() // méthode normal
  {
    return $this->etreMajeur();
  }
  // une méthod eabstraite signifie que lorsqu'on étend la class Joueur, on sera obligé de redéfinir(leur donner un contenu) ces méthodes. En l'occurence etreMajeur() et devise()
  abstract public function etreMajeur();
  abstract public function devise();
}

class JoueurFR extends Joueur
{
  public function etreMajeur()
  {
    return 18;
  }
  public function devise()
  {
    return '€';
  }
}

class JoueurUS extends Joueur
{
  public function etreMajeur()
  {
    return 21;
  }
  public function devise()
  {
    return '$';
  }
}
