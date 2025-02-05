<!-- Créer une classe “Personne” qui aura comme attribut “age” prenant un entier et initialisé à 14 par défaut. Ajouter une méthode “afficherAge()” qui affichera l'âge de la personne et une méthode “bonjour()” qui écrit en console “Hello”.
Créer une méthode “modifierAge()” prenant en paramètre un entier et permettant de modifier l'âge de la personne.
Créer une classe “Eleve” qui hérite de la classe “Personne” qui n’a pas d’attribut et une méthode publique “allerEnCours()” qui affiche : “Je vais en cours” ainsi qu’une méthode “afficherAge()” qui affiche : “J’ai XX ans”.

Créer une classe “Professeur” avec un attribut privé “matiereEnseignee”, qui indiquera la matière du professeur, et une méthode publique “enseigner()” qui affiche : “Le cours va commencer”.
Instancier une classe Personne et une classe Eleve. Afficher l'âge par défaut de l’élève en console. -->


<?php

class Personne{

    public $age;


public function __construct(int $age=14){
    $this->age = $age;

}

public function afficherAge() {
    return $this->age;
}

public function bonjour() {
    return "Hello <br>";
}

public function modifierAge(int $newAge) {
    $this->age = $newAge;
}
    
}

class Eleve extends Personne {

    public function allerEnCours() {
        return "Je vais en cours <br>";
    }

    public function afficherAge(){
        return "J'ai $this->age ans";
    }

}

class Professeur extends Personne {
    private $matiereEnseignee;

    public function __construct(string $matiereEnseignee){
        $this->matiereEnseignee = $matiereEnseignee;
    }

    public function enseigner(){
        return "Le cours va commencer";
    }

   
}

$personne = new Personne();
echo $personne->afficherAge();
echo "<br>";
$eleve = new Eleve();
echo $eleve->afficherAge();

