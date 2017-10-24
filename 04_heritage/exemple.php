<?php

class Membre
{
  public $id = 15;
  public $pseudo;
  public $mdp;

  public function __construct()
  {
    echo 'Internaute crée <hr>';
  }
  public function inscription()
  {
    return 'Je m\'inscris.';
  }
  public function connexion()
  {
    return 'Je me connecte.<br>';
  }
}

class Admin extends Membre  // extension de la classe membre la classe Admin contient ce qu'il y a dans la classe membre plus tout ce qu'elle contient elle meme 
{
  public function accesBackOffice()
  {
    return 'Accès back office<br>';
  }
}

$admin = new Admin;

echo $admin->connexion();
echo $admin->accesBackOffice();
echo $admin->id;
