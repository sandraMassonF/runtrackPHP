<!-- Créez un formulaire de type GET (se demander, pourquoi pas GET ?) avec un
champ nommé nombre.
Après validation du formulaire :
➔ si la valeur entrée est un nombre pair, afficher “Nombre pair”
➔ si c’est un nombre impair, afficher “Nombre impair” -->

<?php
if(empty($_GET)){
    
    echo "Veuillez entrer un nombre :";
}
else{
    if ($_GET["nombre"]%2 == 0) {
        echo "Nombre pair";
    }
    elseif ($_GET["nombre"]%2 != 0){
    echo "Nombre impair";
    }
    else {
    echo "Veuillez entrer un nombre entier positif";
    };
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
   <form action="index.php" method="GET">
    <label>Entrez un nombre :</label>
    <input name="nombre" id="nombre" type="number" />
<br><br>
    <button type="submit">Valider</button>
   </form> 


</body>
</html>
