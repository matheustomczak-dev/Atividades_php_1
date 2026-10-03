<?php

function analizarTexto($texto) {
    $quantidadeCaracteres = mb_strlen($texto);
    $quantidadePalavras = str_word_count($texto);
    $quantidadeVogais = preg_match_all('/[aeiouAEIOU]/', $texto, $matches);

    return [
        "quantidade_caracteres" => $quantidadeCaracteres,
        "quantidade_palavras" => $quantidadePalavras,
        "quantidade_vogais" => $quantidadeVogais
    ];
}

$texto_usuario = "habilidade camaleônica";
echo "Texto original: " . $texto_usuario . "<br>";

$resultado = analizarTexto($texto_usuario);
echo "Quantidade de caracteres: " . $resultado["quantidade_caracteres"] . "<br>";
echo "Quantidade de palavras: " . $resultado["quantidade_palavras"] . "<br>";
echo "Quantidade de vogais: " . $resultado["quantidade_vogais"] . "<br>";

?>