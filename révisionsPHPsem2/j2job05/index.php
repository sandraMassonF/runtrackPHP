<!-- Affichez les nombres premiers jusqu’à 1000 en mettant un retour à la ligne entre chaque nombre.-->
<?php

for($i = 1; $i <= 1000; $i++) {

    $nbDeDivisions = 0;

    for ($j = 1; $j <= $i; $j++) {
        if ($i % $j == 0){
         $nbDeDivisions++;   
        }       
    }
    
    if($nbDeDivisions == 2) {
            echo $i . "<br>";
    }
    
}
