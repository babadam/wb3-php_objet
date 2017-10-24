<?php

class Maison
{
  public static $espaceTerrain = '500m²'; // propiété public et static
  public $couleur ='blanc'; // propriété normal
  private static $nbPiece = 7; // propriété privée ET static (accès par un getter)
  const HAUTEUR = '10m'; // const toujours static appartient toujours à la classe

  public static function getNbPiece() // getter d'une propriété static privée
  {
    return self::$nbPiece; // self équivalent de this(pour objet) pour la classe
  }
}

echo 'espace terrain : ' . Maison::$espaceTerrain . '<br>'; // j'accède à une propriété de class non pas avec "->" mais avec "::"
$mon_objet = new Maison;
echo 'couleur : ' . $mon_objet->couleur . '<br>';
echo 'Nombre de pièces : ' . Maison::getNbPiece() . '<br>';
echo 'Hauteur : ' . Maison::HAUTEUR;
