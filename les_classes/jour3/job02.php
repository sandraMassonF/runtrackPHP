<!-- À l’aide de la classe “Personne” , “Eleve” et “Professeur” crées au-dessus, faites dire bonjour à votre élève grâce à la méthode “bonjour()” ainsi que “Je vais en cours” grâce à la méthode “allerEnCours()”. Redéfinir l'âge de l’élève
à 15 ans.
Créer un objet “Professeur”, 40 ans, faite dire bonjour à votre professeur et commencer le cours grâce à la méthode enseigner. -->


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
        return "Je vais en cours";
    }

    public function afficherAge(){
        return "J'ai $this->age ans";
    }

}

class Professeur extends Personne {
    private $matiereEnseignee;


    public function __construct(string $matiereEnseignee, int $age){
        $this->matiereEnseignee = $matiereEnseignee;
        parent::__construct($age);
    }

    public function enseigner(){
        return "Le cours de $this->matiereEnseignee va commencer";
    }


}


$eleve = new Eleve();
echo $eleve->bonjour();
echo "<br>";
echo $eleve->allerEnCours();
$eleve->modifierAge(15);
echo "<br>";
echo $eleve->afficherAge();
echo "<br>";

$professeur = new Professeur("maths",40);
echo $professeur->enseigner();
echo "<br>";
echo $professeur->afficherAge();
