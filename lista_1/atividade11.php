<?php

function formatarTexto($texto){

echo "Maiusculo" . strtoupper($texto) . "<br>";
echo "Minusculo" . strtolower($texto) . "<br>";
echo "Primeira letra maiuscula" . ucfirst($texto) . "<br>";
echo "Quantidade de caracteres" . strlen($texto) . "<br>";

}

$texto = "Que esta presa arranque os piolhos do cabelo e da barba";
formatarTexto($texto);


?>