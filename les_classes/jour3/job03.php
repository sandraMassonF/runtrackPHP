<!-- Créer une classe “Rectangle” avec comme attribut privé “longueur” et “largeur”. Créer la méthode “perimetre()” permettant de calculer le périmètre du rectangle ainsi que la méthode surface permettant de calculer la surface du rectangle.
Créer les assesseurs et mutateurs permettant de manipuler les attributs de la classe.
Créer une classe “Parallelepipede” héritant de la classe “Rectangle” avec en plus un attribut “hauteur” et une autre méthode “volume()”, permettant de calculer le volume du parallélépipède.
Instancier la classe “Rectangle” et assurez-vous que toutes les méthodes fonctionnent. -->

<?php

class Rectangle
{

    private $longueur;
    private $largeur;



    public function __construct(int $longueur, int $largeur)
    {
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }


    public function perimetre()
    {
        $perimetre = ($this->longueur + $this->largeur) * 2;
        return "Périmètre : $perimetre";
    }

    public function surface()
    {
        $surface = $this->longueur * $this->largeur;
        return "Surface :  $surface";
    }


    public function getLongueur()
    {
        return $this->longueur;
    }


    public function setLongueur($newLongueur)
    {
        $this->longueur = $newLongueur;
    }


    public function getLargeur()
    {
        return $this->largeur;
    }


    public function setLargeur($newLargeur)
    {
        $this->largeur = $newLargeur;
    }
}

class Parallelepipede extends Rectangle
{
    protected $hauteur;

    public function __construct(int $hauteur, int $longueur, int $largeur)
    {
        $this->hauteur = $hauteur;
        parent::__construct($longueur, $largeur);
    }

    public function volume()
    {
        $volume = ($this->hauteur * $this->getLongueur() * $this->getLargeur());
        return "Volume :  $volume";
    }

};


$rectangle = new Rectangle(3, 5);

echo $rectangle->perimetre();
echo "<br>";
echo $rectangle->surface();
echo "<br>";

$parallelepipede = new Parallelepipede(3,5,6);
echo $parallelepipede->volume();
