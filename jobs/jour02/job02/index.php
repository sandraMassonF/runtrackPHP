<!-- Affichez tous les nombres de 0 à 1337 compris sauf 26, 37, 88, 1111 en mettant un retour à la ligne entre chaque nombre.-->




<?php
for ($i = 0; $i < 1338; $i ++)
{    
    if ($i == 26 or $i == 37 or $i == 88 or $i == 1111){
        echo "";
    }
    else {
        echo $i . "<br>";
    }
}
?>

