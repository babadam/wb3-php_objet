<?php

class Panier
{
  public $nbProduits; // une propriété, un attribut

  public function ajouterArticle() // uen méthode
  {
    return 'L\'article a été ajouté';
  }

  public function retirerArticle()
  {
    return 'L\'article a été retiré';
  }

  public function affichageArticle()
  {
    return 'Voici les articles';
  }

}

$panier1 = new Panier; // J'instance un objet $panier1 depuis la classe Panier.
$panier1->nbProduits = 5; // J'attribue 5 à la proprité nbProduits de l'objet panier1

// Une classe : modèle dans lequel on va mettre du code qui va se retrouver dans les objets que l'on va instancier à partie de catte classe
// Un objet : espace mémoire indépendant des uns des autres qui peut contenir des attributs et des méthode
var_dump($panier1);
echo '<br>';
echo $panier1->affichageArticle(); // J'appelle la méthode affichageArticle() depuis l'objet $panier1

echo '<br>';
$panier2 = new Panier;
$panier2->nbProduits = 7;
var_dump($panier2);
