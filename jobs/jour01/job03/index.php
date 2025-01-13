<?php
// Dans le dossier runtrack2/jour01/job03, créez un fichier index.php.
// En PHP, il existe différents types de variables. Créez des variables de types
// primitifs (boolean, entier, chaîne de caractères, nombre à virgule flottante) et affectez-y des valeurs.

// À l’aide de php, générer un tableau html qui contient dans son header trois colonnes (type, nom, valeur) et dans son body, une ligne pour chacune des variables et de leurs informations.
?>



<?php

$boolean = true ; 
$string = "Hello LaPlateforme !" ;
$integer = 15;
$float = 15.12;

?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tableau Test</title>
    <link rel="stylesheet" href="./style.css" />
  </head>
  <body>
  
  <table>
  <thead>
    <tr>
      <th scope="col">Type</th>
      <th scope="col">Nom</th>
      <th scope="col">Valeur</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Booléen</th>
      <td>$boolean</td>
      <td><?php echo $boolean;?></td>
    </tr>
    <tr>
      <th scope="row">Chaine de caractères</th>
      <td>$string</td>
      <td><?php echo $string;?></td>
    </tr>
    <tr>
      <th scope="row">Nombre entier</th>
      <td>$integer</td>
      <td><?php echo $integer;?></td>
    </tr>
    <tr>
      <th scope="row">Nombre flottant</th>
      <td>$float</td>
      <td><?php echo $float;?></td>
    </tr>
  </tbody>
  </table>
 
  </body>
</html>


