<!-- Créez un cookie “nbvisites”. À chaque fois que la page est visitée, ajouter 1. Affichez le contenu du cookie.
Ajoutez un bouton “reset” qui permet de réinitialiser le compteur.-->


<?php


if(isset($_COOKIE['nbVisites'])){
    setcookie('nbVisites', $_COOKIE['nbVisites']+1);
}
else{
    setcookie('nbVisites', 1);
}


if(isset($_POST["reset"])){
    setcookie('nbVisites', 0);
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
    <p>Nombre de visites : <?= $_COOKIE['nbVisites']?></p>
    <form action="index.php" method="post">
        <button type="submit" name="reset">RESET</button>
    </form>
</body>
</html>