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




//VERSION YANNICK

// function isPrime($number)
// {
//     for ($i = 2; $i < $number; $i++) {
//         if ($number % $i == 0) {
//             return false;
//         }
//     }
//     return true;
// }

// for ($i = 2; $i < 1000; $i++) {
//     if (isPrime($i)) {
//         echo $i . " est un nombre premier<br>";
//     }
// }