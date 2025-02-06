<!-- Créer une classe “Vehicule” avec comme attribut une marque, le modèle, une année et un prix. Créer la méthode  informationsVehicule()” qui affiche la marque, le modèle, l'année et le prix du véhicule.
Créer la classe “Voiture” qui hérite de la classe “Vehicule”. Dans le constructeur de la classe “Voiture”, ajouter un attribut “portes” qui contient le nombre entier 4. Créer dans cette classe, une méthode “informationsVehicule()” qui affiche les informations générales du véhicule et le nombre de portes de la voiture.
Instancier un objet Voiture, passer les informations dont la classe a besoin et faites appel à la méthode informationsVehicule()”.
Résultat attendu :  Marque = Mercedes
                    Modèle = Classe
                    Année = 2020
                    Prix = 18500
                    Nombre de portes = 4

Créer une classe “Moto” qui hérite de la classe “Vehicule” et ajouter l'attribut “roue” qui contient par défaut l’entier

Créer à nouveau une méthode “informationsVehicule()” dans la classe “Moto” qui affiche l'intégralité des informations de la moto.
Instancier un objet Moto et faites appel à la méthode informationsVehicule.
Résultat attendu :  Marque = Yamaha
                    Modèle = 1200 Vmax
                    Année = 1987
                    Prix = 4500
                    Nombre de roues = 2

Créer la méthode “demarrer()” dans la classe “Véhicule” qui affiche “Attention, je roule”. Surcharger la méthode “demarrer()” dans la classe “Moto” et “Voiture” afin d’afficher un message personnalisé. Faites démarrer votre voiture et votre moto. -->

<?php 

class Vehicule{

   public $marque;
   public $modele;
   public $annee;
   public $prix;

public function __construct(string $marque, string $modele, int $annee, int $prix){
    $this->marque = $marque;
    $this->modele = $modele;
    $this->annee = $annee;
    $this->prix = $prix;

}

public function informationsVehicule(){
    return "Marque : $this->marque, <br>
            Modèle : $this->modele, <br>
            Année : $this->annee, <br>
            Prix : $this->prix, <br>";

}

public function demarrer(){
    return "Attention je roule";
}

}

class Voiture extends Vehicule{
    public $portes;


    public function __construct(string $marque, string $modele, int $annee, int $prix, int $portes=4){
        parent::__construct($marque, $modele, $annee, $prix);
        $this->portes = $portes;
    }
    
    public function informationsVehicule(){
        return "Marque : $this->marque, <br>
            Modèle : $this->modele, <br>
            Année : $this->annee, <br>
            Prix : $this->prix, <br>
            Nombre de portes : $this->portes <br>";

    }

    public function demarrer(){
        return parent::demarrer() . " voiture!";
    }
}

class Moto extends Vehicule{

    public $roues;

    function __construct(string $marque, string $modele, int $annee, int $prix,int $roues=2) {
        parent::__construct($marque, $modele, $annee, $prix);
        $this->roues = $roues;
    }

    public function informationsVehicule(){
        return "Marque : $this->marque, <br>
            Modèle : $this->modele, <br>
            Année : $this->annee, <br>
            Prix : $this->prix, <br>
            Nombre de roues : $this->roues <br>";

    }

    public function demarrer(){
        return parent::demarrer() . " moto!";
    }
}

$voiture = new Voiture("Mercedes", "Classe A", 2020, 18500);

echo $voiture->informationsVehicule();
echo "<br>";
$moto = new Moto("Yamaha", "1200 Vmax", 1987, 4500);
echo $moto->informationsVehicule();
echo "<br>";
echo $voiture->demarrer();
echo "<br>";
echo $moto->demarrer();