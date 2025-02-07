<!-- Créez une string nommée str et affectez-y “I'm sorry Dave I'm afraid I can't do that”. Créez un algorithme qui parcourt cette chaîne et affiche uniquement les voyelles.-->


<?php
$str = "i'm sorry dave i'm afraid i can't do that";

for($i=0; $i < strlen($str); $i++) {
    if ($str[$i] == "a" or $str[$i] == "e" or $str[$i] == "o" or $str[$i] == "u" or $str[$i] == "i" or $str[$i] == "y"){
        echo $str[$i];
    }

}

