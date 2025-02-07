<!-- Créez un tableau contenant les nombres 200, 204, 173, 98, 171, 404, 459.
Parcourez ce tableau et affichez “X est paire<br />” ou “X est impaire<br/>”, X prenant tour à tour chacune des valeurs comprises dans ce tableau.-->


<?php
$tableau = [200,204,173,98,171,404,459];

foreach ($tableau as $i){
    if ($i%2 == 0) {
    echo "$i est pair <br/>";
    }
    else 
    echo "$i est impair <br/>";

}


?>

