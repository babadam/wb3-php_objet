<?php

// instance sans héritage

class Employes{
    public $prenom;
    public $nom;
    public $salaire;
    public $contrat;
    public $mission;

    public function recevoirVirement(){

    }
}

class Etudiant{
    public $prenom;
    public $nom;
    public $cursus;
    public $planning;
    public $numeroEtudiant;
}

class Professeur extends Employes{}
class Technicien extends Employes{}
class Cadre extends Employes{}

class Eramus extends Etudiant{}
class Boursier extends Etudiant{}
class Apprenti extends Etudiant{}

// class Interne extends Etudiant, Employes
class Interne extends Etudiant
{
    public $employes; // contient un objet de la classe Employes
    public $prenom;

    function __construct(){
        $this -> employes = new Employes();
        //Instance sans héritage : Je suis dans la classe Interne, qui aura accès à toutes les propriétés de Etudiant(heritage), mais également à toutes les propriétés de Employes via la propriété $employes qui contient un objet (une instance) de la classe Employes.
    }
}

$interne = new Interne();
// objet de la classe employes -> recevoirVirement();
$interne -> employes -> recevoirVirement();
echo $interne -> prenom;
