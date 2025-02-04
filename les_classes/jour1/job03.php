<!-- Créez une classe “Personne” avec les attributs “nom” et “prenom”. Ajoutez une méthode “SePresenter()” qui retourne le nom et le prénom de la personne. Ajoutez un constructeur prenant en paramètres de quoi donner des valeurs initiales aux
attributs “nom” et “prenom”. Instanciez plusieurs personnes avec les valeurs de construction de votre choix et faites appel à la méthode “SePresenter()” afin de vérifier que tout fonctionne correctement. -->

<?php

class Personne{
    public $nom;
    public $prenom;

    public function __construct(?string $nom= "Masson", ?string $prenom= "Sandra") {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    public function SePresenter(){
    $presentation = "Je suis $this->nom $this->prenom";
    return $presentation;
    }
};

$personne = new Personne("Masson", "Elinor");
echo $personne->SePresenter();