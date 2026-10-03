<?php

function converterTemperatura($temperatura, $unidadeOrigem, $unidadeDestino) {
    if ($unidadeOrigem === 'C' && $unidadeDestino === 'F') {
        return ($temperatura * 9/5) + 32;
    } elseif ($unidadeOrigem === 'F' && $unidadeDestino === 'C') {
        return ($temperatura - 32) * 5/9;
    } elseif ($unidadeOrigem === 'K' && $unidadeDestino === 'C') {
        return $temperatura - 273.15;
    } else {
        return "Unidades de temperatura inválidas.";
    }
}

$temperatura = 25;
$unidadeOrigem = 'C';
$unidadeDestino = 'F';
$resultado = converterTemperatura($temperatura, $unidadeOrigem, $unidadeDestino);

echo "Temperatura convertida: " . $resultado . "°" . $unidadeDestino;


?>