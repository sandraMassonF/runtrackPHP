<!-- Affichez les nombres de 0 à 100 en mettant un retour à la ligne entre chaque nombre.
Si le nombre est entre 0 et 20 : écrire en italique.
Si le nombre est compris entre 25 et 50 : souligner le nombre.
Affichez “La Plateforme_” à la place de 42.-->




<?php
for ($i = 0; $i < 101; $i ++)
{    
    if ($i >= 0 and $i <=20){
        echo "<i>$i</i>" . "<br>";
    }
    else if($i == 42){
        echo "LaPlateforme_" . "<br>";
    }
    else if ($i >= 25 and $i <=50){
        echo "<u>$i</u>" . "<br>";
    }
    else {
        echo $i . "<br>";
    }
}
?>

