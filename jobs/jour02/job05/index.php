<!-- Affichez les nombres premiers jusqu’à 1000 en mettant un retour à la ligne entre chaque nombre.-->

<?php

for ($i = 1; $i <= 1000; $i++) {

    $nbDiviseur = 0;

    for ($j = 1; $j <= $i; $j++) {
        if (($i % $j) == 0)
            $nbDiviseur++;
    }

    if ($nbDiviseur == 2) {
        echo $i . "<br>";
    }
}

