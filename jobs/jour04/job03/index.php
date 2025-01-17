<!--Développez un algorithme qui affiche le nombre d’arguments $_GET.
Tips : Pour tester votre code, créez un formulaire html de type GET.-->

<?php
$count = 0;

foreach($_POST as $key){
$count++;
}
echo $count;
var_dump($_GET);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action="index.php" method="POST">
    <label>Votre nom :</label>
    <input name="nom" id="nom" type="text" />
<br><br>
    <label>Votre prénom :</label>
    <input name="prenom" id="prenom" type="text" />
<br><br>
    <label>Votre âge :</label>
    <input name="age" id="age" type="number" />
<br><br>

    <label>Votre pays :</label>
    <input name="pays" id="pays" type="text" />
<br><br>
    <button type="submit">Valider</button>
   </form> 

</body>
</html>






