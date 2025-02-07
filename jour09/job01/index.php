<!-- En utilisant PHP et mysqli, connectez-vous à la base de données “jour08”. À l’aide d’une requête SQL, récupérez l’ensemble des informations de la table étudiants. Affichez le résultat de cette requête dans un tableau HTML. La première ligne de votre tableau html (thead) doit contenir le nom des champs. Les suivantes (tbody) doivent contenir les données présentes dans votre base de données. -->

<?php
$bdd = new PDO(
    'mysql:host=localhost;dbname=jour08','root',''
);

$query = $bdd->prepare("SELECT * FROM etudiants");
$query ->execute();
$etudiants = $query -> fetchAll(PDO::FETCH_ASSOC);


var_dump($etudiants);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Tableau des étudiants</h1>

<table>
    <thead>
    <tr>
        <th>Prénom</th>
        <th>Nom</th>
        <th>Naissance</th>
        <th>Sexe</th>
        <th>Email</th>
    </tr>
    </thead>
    <tbody>
        <?php foreach($etudiants as $etudiant){
            echo "
            <tr>
                <td>$etudiant[prenom]</td>
                <td>$etudiant[nom]</td>
                <td>$etudiant[naissance]</td>
                <td>$etudiant[sexe]</td>
                <td>$etudiant[email]</td>
            </tr>";
            };
        ?>            
    </tbody>
</table>
    
</body>
</html>