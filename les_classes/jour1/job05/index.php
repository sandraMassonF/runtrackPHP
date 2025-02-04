<!-- Créez une classe “Animal” avec un attribut “age” initialisé à zéro et “prenom” initialisé vide dans son constructeur.
Instancier un objet “Animal” et afficher l’attribut “age”. Créer une méthode “vieillir()” qui ajoute 1 à l'âge de l’animal. Faire vieillir votre animal et afficher son âge.
Résultat attendu : L'age de l'animal 0 an
                   L'age de l'animal 1 an

Créer une méthode “nommer()” qui prend en paramètre le nom de l’animal.
Nommer votre animal et afficher en console le nom de l’animal.
Résultat attendu : L'animal se nomme Luna -->


<?php 

class Animal{
    public $age = 0;
    public $prenom = "";


    public function __construct(?int $age, ?string $prenom){
        $this->age = $age;
        $this->prenom = $prenom;
    }

    public function vieillir(){
         $this->age += 1 ;
        return "L'age de l'animal est $this->age an <br>";
        
    }

    public function nommer($prenom){
        $this->prenom = $prenom;
        return "L'animal se nomme $this->prenom <br>";
    }
};

$animal = new Animal(3, "toto");

echo $animal->vieillir();
echo $animal->vieillir();
echo $animal->vieillir();

echo $animal->nommer("luna");
