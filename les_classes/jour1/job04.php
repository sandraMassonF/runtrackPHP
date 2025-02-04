<!-- Créer une classe nommée “Point” avec les attributs “x” et “y” correspondant aux coordonnées horizontales et verticales du point. Les deux attributs doivent être initialisés dans le constructeur.

La classe “Point” doit posséder les méthodes suivantes :
➔ “afficherLesPoints()” qui affiche les coordonnées des points.
➔ “afficherX()” et “afficherY()” qui affiche respectivement x et y.
➔ “changerX()” et “changerY()” qui change la valeur des attributs x et y. -->

<?php 

class Point {
    public $x;
    public $y;


    public function __construct(?int $x,?int $y) {
        $this->x= $x;
        $this->y= $y;

    }

    public function afficherLesPoints(){
        $afficher = "Les coordonées des points sont : $this->x et $this->y <br>";
        return $afficher;
    }

    public function afficherX(){
        $afficheX = "La valeur de X est : $this->x <br>";
        return $afficheX;
    }
    public function afficherY(){
        $afficheY = "La valeur de Y est : $this->y <br>";
        return $afficheY;
    }

    public function changerX($newX){
        $this->x = $newX;
        $changementX = "La nouvelle valeur de X est : $this->x <br>";
        return $changementX;
    }
    public function changerY($newY){
        $this->y = $newY;
        $changementY = "La nouvelle valeur de Y est : $this->y <br>";
        return $changementY;
    }

};

$affichagePoints = new Point(5,6);
echo $affichagePoints->afficherLesPoints();
echo $affichagePoints->afficherX();
echo $affichagePoints->afficherY();
echo $affichagePoints->changerX(12);
echo $affichagePoints->changerY(52);
echo $affichagePoints->afficherX();


