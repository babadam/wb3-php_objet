<?php

class Etudiant
{
  private $prenom;
  public function __construct($arg)
  {
    echo 'Instanciation, nous avons reçu l\'argument suivant : ' . $arg;
    $this->setPrenom($arg);
  }
  public function setPrenom($arg)
  {
    $this->prenom = $arg;
  }
  public function getPrenom()
  {
    return $this->prenom;
  }
}
// set : permet de donner une valeur à l'attribut
// get : permet de récupere la valeur d'un attibut 

$etudiant = new Etudiant('Barbara');
echo '<br>';

var_dump($etudiant);
echo '<br>';
$etudiant->setPrenom('Adam');
var_dump($etudiant);
