<?php

function calcularIMC($peso, $altura) {
    return $peso / ($altura * $altura);
}

function validarEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function gerarSenha() {
    $caracteres = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
    $senha = "";

    for ($i = 0; $i < 8; $i++) {
        $senha = $senha . $caracteres[rand(0, strlen($caracteres) - 1)];
    }

    return $senha;
}

function contarVogais($texto) {
    $quantidade = 0;
    $vogais = "aeiouAEIOU";

    for ($i = 0; $i < strlen($texto); $i++) {
        if (strpos($vogais, $texto[$i]) !== false) {
            $quantidade++;
        }
    }

    return $quantidade;
}

function inverterTexto($texto) {
    return strrev($texto);
}

function calcularIdade($anoNascimento) {
    $anoAtual = date("Y");

    return $anoAtual - $anoNascimento;
}

function converterMoeda($valor) {
    $cotacao = 5.40;

    return $valor * $cotacao;
}

function formatarTelefone($telefone) {
    $telefone = preg_replace("/[^0-9]/", "", $telefone);

    return "(" . substr($telefone, 0, 2) . ") " .
           substr($telefone, 2, 5) . "-" .
           substr($telefone, 7, 4);
}

function gerarSaudacao() {
    $hora = date("H");

    if ($hora < 12) {
        return "Bom dia!";
    } elseif ($hora < 18) {
        return "Boa tarde!";
    } else {
        return "Boa noite!";
    }
}

function validarSenhaForte($senha) {

    if (strlen($senha) < 8) {
        return false;
    }

    if (!preg_match("/[A-Z]/", $senha)) {
        return false;
    }

    if (!preg_match("/[a-z]/", $senha)) {
        return false;
    }

    if (!preg_match("/[0-9]/", $senha)) {
        return false;
    }

    return true;
}

?>