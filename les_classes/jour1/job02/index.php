<!-- Modifier votre classe “Operation” afin d’y ajouter la méthode “addition()”. Cette méthode additionne “nombre1” et “nombre2” et afficher le résultat. -->

<?php

class Operation{
    public $nombre1;
    public $nombre2;

    public function __construct(?int $nombre1, ?int $nombre2) {
        $this->nombre1 = $nombre1;
        $this->nombre2 = $nombre2;
}

    public function addition() {
        $result = $this->nombre1 + $this->nombre2;
        return $result;

}
};

$calcul = new Operation(5,5);

echo $calcul->addition();

?>