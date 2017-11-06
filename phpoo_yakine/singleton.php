<?php

// design pattern : modèle de conception : Le design pattern est la réponde trouvée par des développeurs pour répondre à une problématique rencontrée par la communauté.

// singleton : est un design pattern qui répond à la question suivante : comment créer une classe qui soit intanciable  une seule fois. Une classe pour laquelle il ne puisse exister qu'un seul objet.

class Singleton
{
    private static $instance = NULL;

    private function __construct(){} // s'éxécute à l'instanciation, en mettant le constructeur en private, il devient impossible d'instancier cette classe comme on le fait habituellement.
    private function __clone(){} // en mettant la fonction clone en private, il devient impossible de cloner un objet de cette classe.

    public static function getInstance(){ // static appartient à la classe, non static appartient à l(objet)
        if(is_null(self::$instance)){
            self::$instance = new Singleton;
            // self::$instance = new self;
        }
        return self::$instance;
    }
}

$singleton = Singleton::getInstance(); //$singleton contient le seul et unique objet de la classe Singleton.
// $a = new Singleton; IMPOSSIBLE !! INSTANCIATION IMPOSSIBLE

$singleton2 = Singleton::getInstance();
