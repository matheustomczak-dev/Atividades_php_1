<?php

function criptografarMensagem($texto) {

    $resultado = "";

    for ($i = 0; $i < strlen($texto); $i++) {

        $letra = $texto[$i];

        if ($letra >= "a" && $letra <= "z") {
            $letra = chr((ord($letra) - ord("a") + 3) % 26 + ord("a"));
        }

        if ($letra >= "A" && $letra <= "Z") {
            $letra = chr((ord($letra) - ord("A") + 3) % 26 + ord("A"));
        }

        $resultado = $resultado . $letra;
    }

    return $resultado;
}


function descriptografarMensagem($texto) {

    $resultado = "";

    for ($i = 0; $i < strlen($texto); $i++) {

        $letra = $texto[$i];

        if ($letra >= "a" && $letra <= "z") {
            $letra = chr((ord($letra) - ord("a") - 3 + 26) % 26 + ord("a"));
        }

        if ($letra >= "A" && $letra <= "Z") {
            $letra = chr((ord($letra) - ord("A") - 3 + 26) % 26 + ord("A"));
        }

        $resultado = $resultado . $letra;
    }

    return $resultado;
}


$mensagem = "Ola Mundo";

$mensagemCriptografada = criptografarMensagem($mensagem);
$mensagemOriginal = descriptografarMensagem($mensagemCriptografada);

echo "Mensagem original: " . $mensagem . "<br>";
echo "Mensagem criptografada: " . $mensagemCriptografada . "<br>";
echo "Mensagem descriptografada: " . $mensagemOriginal;

?>