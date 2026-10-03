<?php

function calcularMedia($x, $y, $z) {

    $media = ($x + $y + $z) / 3;
    return $media;

}

$x = 10;
$y = 20;
$z = 30;

echo "Valor de X: $x<br>";
echo "Valor de Y: $y<br>";  
echo "Valor de Z: $z<br>";
echo "Média: " . calcularMedia($x, $y, $z) . "<br>";

?>

