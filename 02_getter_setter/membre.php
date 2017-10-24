<?php

// Exercice : au vu de cette classe vous aller devoir écrire les setters et les getters pour cette classe

class Membre
{
  private $prenom;
  private $nom; // déclaration des propriétés (ou propriétés)

// Ce code est exécuté à chaque instanciation d'un objet
  public function __construct($arg1, $arg2)
  {
    echo 'Instanciation, nous avons reçu l\'argument suivant : ' . $arg1 . '<br>';
    $this->setPrenom($arg1);
    echo 'Instanciation, nous avons reçu l\'argument suivant : ' . $arg2 .'<br>';
    $this->setNom($arg2);
  }

  // Je crée le getter pour l'attribut prénom. Il renvoie la valeur de l'attribut prénom.
  public function getPrenom()
  {
    return $this->prenom;
  }
  // Je crée le getter pour l'attribut nom. Il renvoie la valeur de l'attribut nom.
  public function getNom()
  {
    return $this->Nom;
  }
  // Je crée le setter pour l'attribut prénom. Il prends en argument la valeur qu'aura l'attribut prénom
  public function setPrenom($arg)
  {
    $this->prenom = $arg;
  }
  // Je crée le setter pour l'attribut nom. Il prends en argument la valeur qu'aura l'attribut nom.
  public function setNom($arg)
  {
    $this->Nom = $arg;
  }


}
$membre = new Membre('Barbara', 'Tousverts');
echo '<br>';

var_dump($membre);
echo '<br>';
$membre->setPrenom('Adam');
var_dump($membre);
