<!-- Créer une chaîne str qui contient “Certaines choses changent, et d'autres ne changeront jamais.”. Créer un algorithme qui parcourt cette string en remplaçant le premier caractère par le deuxième, le deuxième par le
troisième etc.. et le dernier par le premier.-->


<?php

$str = "Certaines choses changent, d'autres ne changeront jamais.";

$strTab = [];
$index = 0;

while (isset($str[$index])) {
    array_push($strTab, $str[$index]); // liste des lettres $str
    $index++;
}
$strTab2 = array_shift($strTab); // prend la 1ere lettre de $str
array_push($strTab, $strTab2); // met la 1ere lettre à la fin de $strTab
$end = implode($strTab); // rassemble les lettres du tableau en une string
echo $end;
