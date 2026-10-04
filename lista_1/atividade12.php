<?php

function analisarProdutos($produtos, $pesquisa) {

    $maior = $produtos[0];
    $menor = $produtos[0];
    $soma = 0;
    $econtrado = false;

    foreach ($produtos as $produto){

        if ($produto["preco"] > $maior["preco"]){
            $maior = $produto;
        }

        if ($produto["preco"] < $menor["preco"]){
            $menor = $produto;
        }

        $soma += $produto["preco"];

        if produto  ["nome"] == $pesquisa {
            $econtrado = true;
        }

    }

    $media = $soma / count($produtos);

    echo "produto mais caro:" . $maior["nome"] . " - R$" . $maior["preco"] . "<br>";
    echo "produto mais barato:" . $menor["nome"] . " - R$" . $menor["preco"] . "<br>";
    echo " média de preços: R$" . $media . "<br>";

    if ($econtrado == true){
        echo "Produto encontrado! " . $pesquisa . " <br>";

    } else {
        echo "Produto não encontrado! <br>";
    }

}


