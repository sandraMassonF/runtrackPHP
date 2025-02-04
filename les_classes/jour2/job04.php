<!-- Créer une classe nommée “Student” qui a comme attributs privés un nom, un prénom, un numéro d’étudiants et un nombre de crédits par défaut à zéro. La méthode “add_credits()” permet d’ajouter un nombre de crédits au total de celui de l’étudiant. Ce mutateur doit s’assurer que la valeur passée en argument est supérieure à zéro pour garantir l’intégrité de la valeur.
Instancier un objet représentant l’étudiant John Doe qui possède le numéro d’étudiant 145. Ajoutez-lui des crédits à trois reprises et afficher son total de crédits. 
Pour des mesures de confidentialité, l'établissement ne souhaite pas divulguer la façon dont elle évalue le niveau de ses étudiants. Pour répondre à cette problématique, créer une méthode nommée “studentEval()” qui sera privée Cette méthode retourne “Excellent” si le nombre de crédits est égal ou supérieur à 90, “Très bien” si le nombre est supérieur ou égal à 80, “Bien” si le nombre est supérieur ou égale à 70, “Passable” si égale ou supérieure à 60 et “Insuffisant” si inférieur à 60.
Ajouter l’attribut privé nommé “level” dans le constructeur de la classe “Student” qui prend en valeur la méthode “studentEval()”. Créer une méthode “studentInfo()” qui affiche les informations de l’étudiant (nom, prénom, identifiant et son niveau).
Résultat attendu : Nom = John
                   Prénom = Doe
                   id = 145
                   Niveau = Bien -->

<?php 

class Student{

private $nom;
private $prenom;
private $numEtudiant;
private $nbCredits;

public function __construct(string $nom="", string $prenom="", int $numEtudiant=0, int $nbCredits=0){
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->numEtudiant = $numEtudiant;
    $this->nbCredits = $nbCredits;
}


public function getNom(){
    return $this->nom;
}
public function getPrenom(){
    return $this->prenom;
}
public function getNumEtudiant(){
    return $this->numEtudiant;
}
public function getNbCredits(){
    return $this->nbCredits;
}

public function add_credits($newCredit) {
    if ($newCredit > 0){
    $this->nbCredits += $newCredit;
} else return "Le crédit doit être supérieur à 0";
}

};



$newEtudiant = new Student("Doe","John",145,0);

echo $newEtudiant->getNom();
echo "<br>";
echo $newEtudiant->getPrenom();
echo "<br>";
echo $newEtudiant->getNumEtudiant();
echo "<br>";
echo $newEtudiant->getNbCredits();
echo "<br>";
echo $newEtudiant->add_credits(15);
echo "<br>";
echo $newEtudiant->getNbCredits();