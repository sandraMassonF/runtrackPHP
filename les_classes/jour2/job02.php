<!-- Créer la classe “Livre” qui prend en attributs privés un titre, un auteur et un nombre de pages.
Créer les assesseurs et mutateurs nécessaires afin de pouvoir modifier et afficher les attributs. Pour changer le nombre de pages, Ce dernier doit être un nombre entier positif, sinon la valeur n’est pas changée et un message d’erreur est affiché. -->
<?php


class Livre{
    private $titre = "";
    private $auteur = "";
    private $nbPages = 0;

public function __construct(?string $titre, ?string $auteur, ?int $nbPages){
    $this->titre = $titre;
    $this->auteur = $auteur;
    $this->nbPages = $nbPages;    
}

public function getTitre(){
    return $this->titre;
}
public function getAuteur(){
    return $this->auteur;
}
public function getNbPages(){
    return $this->nbPages;
}


public function setTitre($newTitre){
    $this->titre = $newTitre;
}

public function setAuteur($newAuteur){
    $this->auteur = $newAuteur;
}

public function setNbPages($newNbPages){    
    if($newNbPages <=0 || is_int($newNbPages)){
        echo "Le nombre doit être un entier positif";  
    }
    else
    $this->nbPages = $newNbPages;
}
};

$livre = new Livre("Le seigneur des anneaux", "J.R.R Tolkien", 250);

echo $livre->getTitre();
echo "<br>";
echo $livre->getAuteur();
echo "<br>";
echo $livre->getNbPages();
echo "<br>";

$livre->setTitre("The Witcher");
$livre->setAuteur("Andrzej Sapkowski");
$livre->setNbPages(2,5);
echo "<br>";

echo $livre->getTitre();
echo "<br>";
echo $livre->getAuteur();
echo "<br>";
echo $livre->getNbPages();



