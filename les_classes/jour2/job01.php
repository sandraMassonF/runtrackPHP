<!-- Créer une classe “Rectangle” avec des attributs privés, “longueur” et “largeur” initialisés dans le constructeur.
Créer des assesseurs et mutateurs afin de pouvoir afficher et modifier les attributs de la classe.
Créer un rectangle avec les valeurs suivantes : longueur 10 et largeur 5. Changer la valeur de la longueur et de la largeur et vérifier que les modifications soient bien prises en compte. -->

<?php 

class Rectangle{

    private $longueur = 0;
    private $largeur = 0;


    public function __construct($longueur, $largeur){
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }

    public function getLongeur(){
        return $this->longueur;

    }
    public function getLargeur(){
        return $this->largeur;
        
    }

    public function setLongeur($newLongeur){
        $this->longueur = $newLongeur;
    }
    public function setLargeur($newLargeur){
        $this->largeur = $newLargeur;
    }

};

$rectangle = new Rectangle(10,5);

echo $rectangle->getLongeur();
echo "<br>";
echo $rectangle->getLargeur();
echo "<br>";
$rectangle->setLongeur(15);
$rectangle->setLargeur(25);
echo "<br>";
echo $rectangle->getLongeur();
echo "<br>";
echo $rectangle->getLargeur();

