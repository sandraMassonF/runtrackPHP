<!-- En utilisant PHP et mysqli, connectez-vous à la base de données “jour08”. À l’aide d’une requête SQL, récupérez le nom et la capacité de chacune des salles. Affichez le résultat de cette requête dans un tableau HTML. La première
ligne de votre tableau HTML doit contenir le nom des champs. Les suivantes doivent contenir les données présentes dans votre base de données. -->

<?php
$bdd = new PDO(
    'mysql:host=localhost;dbname=jour08','root',''
);

$query = $bdd->prepare("SELECT nom, capacite FROM salles");
$query ->execute();
$salles = $query -> fetchAll(PDO::FETCH_ASSOC);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Tableau des salles</h1>

<table>
    <thead>
    <tr>
        <th>Nom</th>
        <th>Capacité</th>        
    </tr>
    </thead>
    <tbody>
        <?php foreach($salles as $salle){
            echo "
            <tr>
                <td>$salle[nom]</td>
                <td>$salle[capacite]</td>                
            </tr>";
            };
        ?>            
    </tbody>
</table>
    
</body>
</html>