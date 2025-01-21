<!-- Créez une variable nommée “nbvisites”. À chaque fois que la page est visitée, ajoutez 1. Affichez le contenu de cette variable.
Ajoutez un bouton “reset” qui permet de réinitialiser ce compteur.-->


<?php

session_start();

$nbVisites = "";


if(!isset($_SESSION[$nbVisites])){
    $_SESSION[$nbVisites] = 0;
}
else{
    $_SESSION[$nbVisites]++;
}

if(isset($_POST["reset"])){
    $_SESSION[$nbVisites] = 0;
    session_destroy();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bienvenue sur mon site</h1>
    <p>Nombre de visites : <?= $_SESSION[$nbVisites]?></p>
    <form action="index.php" method="post">
        <button type="submit" name="reset">RESET</button>
</body>
</html>