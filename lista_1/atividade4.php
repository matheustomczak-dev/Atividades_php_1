<?php

function gerarsenha(){

$caracteres = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+-=';
$senha = '';
$tamanho = 7;

    for ($i = 0; $i < $tamanho; $i++) {
       $senha .= $caracteres[rand(0, strlen($caracteres) - 1)];
    }
    return $senha;

    
}

echo gerarsenha();
?>