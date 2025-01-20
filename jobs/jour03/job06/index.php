<!-- Créez une chaîne de caractères str qui contient “Les choses que l'on Possède finissent par nous posséder.”. Créez un algorithme qui parcourt et écrit cette chaine à l’envers.-->


<?php

$str = "Les choses que l'on possede finissent par nous posseder";


$strToTab = str_split($str);

$count = 0;

foreach ($strToTab as $value) {
    $count++;
    $reversed = array_reverse($strToTab);
}

for ($i = 0; $i < $count; $i++) {
    echo $reversed[$i];
}