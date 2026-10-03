<?php

function calcular($x, $y) {
    if (($x + $y) == 0) {
        return "não é possível dividir por zero";
}

$resultado = (pow($x, 2) + pow($y, 2)) / ($x + $y);
return $resultado;

$x = 10;    
$y = 5;

echo "valor de X: $x<br>";
echo "valor de Y: $y<br>";
echo "resultado: " . calcular($x, $y);



?>