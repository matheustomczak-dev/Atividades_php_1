<?php

function analisarNumero($numero) {

    if ($numero % 2 == 0) {
        echo "O número $numero é par.<br>";
    } else {
        echo "O número $numero é ímpar.<br>";
    }

    $contador = 0;

    for ($i = 1; $i <= $numero; $i++) {

        if ($numero % $i == 0) {
            $contador++;
        }
    }

    if ($contador == 2) {
        echo "O número é primo.<br>";
    } else {
        echo "O número não é primo.<br>";
    }

    $soma = 0;

    for ($i = 1; $i < $numero; $i++) {

        if ($numero % $i == 0) {
            $soma = $soma + $i;
        }
    }

    if ($soma == $numero) {
        echo "O número é perfeito.";
    } else {
        echo "O número é imperfeito.";
    }
}

$numero = 6;

analisarNumero($numero);

?>