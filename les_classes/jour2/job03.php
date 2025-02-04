<!-- Récupérer la classe “Livre”.
Ajouter l'attribut privé “disponible” est initialisé par défaut à True.
Créer une méthode nommée “verification()” qui vérifie si le livre est disponible, c'est-à-dire que la valeur de son attribut disponible est égale à True. Cette méthode doit retourner True ou False.
Ajouter une méthode “emprunter()” qui rend le livre indisponible, autrement dit la valeur de disponible devient False. Bien sûr, pour pouvoir emprunter un livre, il faut que celui-ci soit disponible, vérifiez donc que celui-ci soit disponible sans utiliser l’attribut disponible.
Après avoir emprunté un livre, il faut pouvoir le rendre. Créer une méthode “rendre()” qui dans un premier temps vérifie si le livre a bien été emprunté ( sans utiliser l’attribut disponible), puis change la valeur de l’attribut disponible. -->

<?php

class Livre{
    private $titre;
    private $auteur;
    private $nbPages;
    private $disponible;

public function __construct(?string $titre="", ?string $auteur="", ?int $nbPages=0){
    $this->titre = $titre;
    $this->auteur = $auteur;
    $this->nbPages = $nbPages;
    $this->disponible = true;   
}

public function verification(){
    if($this->disponible == true){
       return true;
    }
    else return false;
}

public function emprunter() {
    if($this->verification() == true){
        $this->disponible = false;
        return "Vous pouvez emprunter ce livre";
    }else return "Ce livre est déjà emprunté";
}

public function rendre(){
if ($this->verification() == false){
    $this->disponible = true;  
    return "Vous avez bien rendu le livre $this->titre";
   
}else
     return "Ce livre ne peut être rendu car il n'a pas été emprunté";
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
public function getDisponible(){
    return $this->disponible;
}

public function setTitre($newTitre){
    $this->titre = $newTitre;
}

public function setAuteur($newAuteur){
    $this->auteur = $newAuteur;
}

public function setNbPages($newNbPages){    
    if($newNbPages <=0 || is_int($newNbPages)){
        return "Le nombre doit être un entier positif";  
    }
    else
    $this->nbPages = $newNbPages;
}

public function setDisponible($newDisponible){
    $this->disponible = $newDisponible;
}

};

$livre = new Livre("Le seigneur des anneaux", "J.R.R Tolkien", 250);

echo $livre->getTitre();
echo "<br>";
echo $livre->getAuteur();
echo "<br>";
echo $livre->getNbPages();
echo "<br>";
echo $livre->verification();
echo "<br>";
echo $livre->emprunter();
echo "<br>";
echo $livre->emprunter();
echo "<br>";
echo $livre->rendre();
echo "<br>";
echo $livre->rendre();

