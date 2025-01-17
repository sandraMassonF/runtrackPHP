<!-- Créez une fonction nommée “calcule()” qui prend 3 paramètres :
➔ le premier est un nombre,
➔ le deuxième est un caractère contenant le type d’opération (+ ,-,*, /,%)
➔ le troisième est un nombre
La fonction doit retourner le résultat de l’opération.. -->

<?php
function calcule( $nombre1,  $operateur,  $nombre2) {
    if ($operateur == "+"){
        return $nombre1 + $nombre2;
    }
    elseif ($operateur == "-"){
        return $nombre1 - $nombre2;
    }
    elseif ($operateur =="*"){
        return $nombre1 * $nombre2;
    }
    elseif ($operateur == "/"){
        return $nombre1 / $nombre2;
    }
    elseif ($operateur == "%"){
        return $nombre1 % $nombre2;
    }
    else{
        return "veuillez entrer un symbole  + ,  - ,  * ,  /  ou  % ";
    }
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>CALCUL</h1>
    <form method="get" action="index.php">
    <input type="number" name="nombre1" value="<?php $nombre1?>" placeholder="Entrez un nombre">
    <br><br>
    <input type="text" name="operateur" value="<?php $operateur?>" placeholder="Entrez un symbole">
    <br><br>
    <input type="number" name="nombre2" value="<?php $nombre2?>" placeholder="Entrez un nombre">
    <br><br>
    <button>Lancer le calcul</button>
    <br><br>
    <h2>Résultat</h2>
    <p>
        <?php
            if(empty($_GET)) { echo('Veuillez faire un calcul.'); }
            else { echo(calcule($_GET["nombre1"], $_GET["operateur"], $_GET["nombre2"])); }
        ?>
    </p>
    </form>
</body>
</html>

