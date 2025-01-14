<!-- Affichez tous les nombres compris entre 0 et 1337 en mettant un retour à la ligne entre chaque nombre.
Le nombre 42 doit être en gras et souligné.-->

<!-- $nombre = 0;
 do{
    echo $nombre . "<br>";
 }
 while ($nombre < 1338); -->



<?php
for ($i = 0; $i < 1338; $i ++)
{    
    if ($i == 42){
        echo "<strong>$i</strong>" . "<br>";
    }
    else {
        echo $i . "<br>";
    }
}
?>

