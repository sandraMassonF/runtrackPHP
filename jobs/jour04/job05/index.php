<?php

    if (empty($_POST)){
        echo "Entrez votre username et mdp :";
    }
    else{
        if ($_POST["username"] == "john" && $_POST["password"] == "rambo")
        {
            echo "c’est pas ma guerre";
        }
        else{
            echo "votre pire cauchemar";
        }
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
   <form action="index.php" method="POST">
    <label>Username :</label>
    <input name="username" id="username" type="text" />
<br><br>
    <label>Password :</label>
    <input name="password" id="password" type="password" />
<br><br>
    <button type="submit">Valider</button>
   </form> 



</body>
</html>
