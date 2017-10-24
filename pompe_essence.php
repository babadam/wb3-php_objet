<?php

/*
Créer une class Vehicule °
attribut : $litreEssence °
methodes : getter et setter pour $litreEssence.°

Créer une class Pompe °
attribut : $litreEssence °
Méthodes : getter et setter pour $litreEssence et donnerEssence ($vehicule)
donnerEssence fait le plein de la voiture (ajoute 50 litres à son réservoir) et soustrait autant de litres au réservoir de la pompe à essence

Instancier un véhicule
Instancier une pompe à essence.
Donner 0 litres d'essence au véhicule
Donner 800 litres d'essence à la pompe

Faire le plein de la voiture avec la pompe à essence.
*/

// class Vehicule
// {
//   private $litreEssence;
//
//   public function setLitreEssence($arg)
//   {
//     $this->litreEssence = $arg;
//   }
//   public function getLitreEssence()
//   {
//     return $this->litreEssence;
//   }
// }
//
// class Pompe
// {
//   private $litreEssence;
//   private $vehicule;
//   private $litrePompe;
//
//   public function setLitreEssence($arg)
//   {
//     $this->litreEssence = $arg;
//   }
//   public function getLitreEssence()
//   {
//     return $this->litreEssence;
//   }
//   public function donnerEssence($vehicule)
//   {
//     return $vehicule = 50;
//     return $litrePompe = -50;
//   }
// }

class Vehicule
{
  // un attribut $litreEssence qui représente combien de litre d'essence il y a dans le réservoir de la voiture
  private $litreEssence;

  public function getLitreEssence()
  {
    return $this->litreEssence;
  }
  public function setLitreEssence($essence)
  {
    $this->litreEssence = $essence;
  }
}

class Pompe
{
  private $litreEssence;

  public function getLitreEssence()
  {
    return $this->litreEssence;
  }
  public function setLitreEssence($essence)
  {
    $this->litreEssence = $essence;
  }
  public function donnerEssence(Vehicule $vehicule) // vérifie que $vehicule est bien une instanciation de la class Vehicule
  {
    $vehicule->setLitreEssence(50);
    $resultat = $this->getLitreEssence() - 50;

    $this->setLitreEssence($resultat);
  }
}

$vehicule = new Vehicule;
$vehicule->setLitreEssence(0);

$pompe = new Pompe;
$pompe->setLitreEssence(800);

$pompe->donnerEssence($vehicule);
var_dump($vehicule);
var_dump($pompe);
