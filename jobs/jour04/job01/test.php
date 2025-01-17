<?php 
$parfums = [
    "Fraise" => 4,
    "Chocolat" => 5,
    "Vanille" => 3
];  
$cornets = [
    "Pot" => 2,
    "Cornet" => 3
];
$supplements = [
    "Pépites de chocolat" => 1,
    "Chantilly" => 0.5
];
$title = "Composer votre glace";


function checkbox (string $name, string $value, array $data): string
{
    $attributes = "";
    if (isset($data[$name]) && in_array($value, $data[$name]))
    $attributes .= "checked";
    echo '<input type="checkbox" name= "$name[]" value="$value">';
}



?>

<h2>Composer votre glace</h2>

<form action="test.php" method="GET">
    <?php foreach($parfums as $parfum => $prix):?>
        <label>
           <? checkbox("parfum", $parfum, $_GET)?>
            <?= $parfum ?> - <?= $prix ?> € <br>
        </label>
<?php endforeach; ?>
<br>
<button type="submit">Composer ma glace</button>
    


</form>
