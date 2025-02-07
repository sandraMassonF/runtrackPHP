<!--Développez un algorithme qui affiche le nombre d’arguments $_GET.
Tips : Pour tester votre code, créez un formulaire html de type GET.-->

<?php

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
   <form action="index.php" method="GET">
    <label>Votre nom :</label>
    <input name="nom" id="nom" type="text" />
<br><br>
    <label>Votre prénom :</label>
    <input name="prenom" id="prenom" type="text" />
<br><br>
    <label>Votre âge :</label>
    <input name="age" id="age" type="number" />
<br><br>
    <button type="submit">Valider</button>
   </form> 


<table>
<tr>
            <td>clés</td>
            <td>
                <?php
                foreach ($_GET as $key => $value) {
                    echo $key . " ";
                }
                ?>
            </td>
   <tr>
       <td>valeurs</td>
       <td> <?php
                foreach ($_GET as $key => $value) {
                    echo $value ." ";
                }
                ?></td>
   </tr>
</table>
</body>
</html>






