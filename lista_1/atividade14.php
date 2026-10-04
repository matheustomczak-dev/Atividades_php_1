<?php

function estatisticasNumericas($numeros) {

    $soma = 0;
    $pares = 0;
    $impares = 0;

    foreach ($numeros as $numero) {

        $soma = $soma + $numero;

        if ($numero % 2 == 0) {
            $pares++;
        } else {
            $impares++;
        }
    }

    $media = $soma / count($numeros);

    $maior = max($numeros);
    $menor = min($numeros);

    sort($numeros);

    $quantidade = count($numeros);

    if ($quantidade % 2 == 0) {
        $meio1 = $numeros[($quantidade / 2) - 1];
        $meio2 = $numeros[$quantidade / 2];

        $mediana = ($meio1 + $meio2) / 2;
    } else {
        $mediana = $numeros[floor($quantidade / 2)];
    }

    return [
        "soma" => $soma,
        "media" => $media,
        "maior" => $maior,
        "menor" => $menor,
        "mediana" => $mediana,
        "pares" => $pares,
        "impares" => $impares
    ];
}


$numeros = [10, 5, 8, 3, 12, 7, 4];

$resultado = estatisticasNumericas($numeros);

echo "Soma: " . $resultado["soma"] . "<br>";
echo "Média: " . $resultado["media"] . "<br>";
echo "Maior valor: " . $resultado["maior"] . "<br>";
echo "Menor valor: " . $resultado["menor"] . "<br>";
echo "Mediana: " . $resultado["mediana"] . "<br>";
echo "Quantidade de pares: " . $resultado["pares"] . "<br>";
echo "Quantidade de ímpares: " . $resultado["impares"];

?>