<!-- Créez un formulaire qui contient un input de type text et un bouton. Lorsque l’on valide le formulaire, le contenu est ajouté dans une variable de session. Affichez l’ensemble des prénoms.
Ajoutez un bouton “reset” qui permet de réinitialiser la liste.-->



<?php

session_start();


if  (!isset($_SESSION['prenoms'])){
    $_SESSION['prenoms'] = "";
}
if  (isset($_POST['envoyer']) and isset($_SESSION['prenoms']));{
    $_SESSION['prenoms'] .= $_POST['prenom'] ."<br>";
}

if (isset($_POST['reset'])) {
  $_SESSION['prenoms'] = "";

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
    <h1>Bienvenue</h1>
    <form action="index.php" method="post">
        <input type="text" name="prenom" value="" placeholder="Entrez votre prénom">
        <br><br>
        <button type="submit" name="envoyer">ENVOYER</button>
        <br><br>
        <p><?php echo $_SESSION['prenoms'] . "<br>";?>
        </p>
        <br><br>
        <button type="submit" name="reset">RESET</button>
    </form>
</body>
</html>