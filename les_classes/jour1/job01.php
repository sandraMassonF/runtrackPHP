<!-- Créer une classe “Operation” avec un constructeur (méthode qui sera appelée lors de l’instance de la classe). Ajouter les attributs “nombre1” et “nombre2” initialisés avec des valeurs par défaut. Instancier votre première classe et afficher les attributs. -->

<?php
class Operation{
    public $nombre1;
    public $nombre2;

    public function __construct (?int $nombre1=1, ?int $nombre2=2){
        $this->nombre1 = $nombre1;
        $this->nombre2 = $nombre2;
    }

    public function result(){
        $result = "Les attributs sont $this->nombre1 et $this->nombre2";
        return $result;
    }
};

$affichage = new Operation(4,6);
echo $affichage->result();

?>_