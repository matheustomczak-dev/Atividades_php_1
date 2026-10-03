<?php

function calcularDesconto($valorOriginal) {
    if ($valorOriginal < 100) {
        return "Valor da compra é menor que R$100,00. Não há desconto.";
    }
    elseif ($valorOriginal > 100) {
        return $valorOriginal * 0.1;

    }
    elseif ($valorOriginal > 200) {
        return $valorOriginal * 0.2;
    }
    elseif ($valorOriginal > 1000) {
        return $valorOriginal * 0.3;
    }
   
}

$valorOriginal = 150;
$percentualDesconto = 10; 
$valorDesconto = calcularDesconto($valorOriginal);

echo "Valor original: R$" . $valorOriginal . "<br>";
echo "Desconto: R$" . $valorDesconto . "<br>";
echo "Valor final: R$" . ($valorOriginal - $valorDesconto) . "<br>";
?>
