<?php

function ordenarNomes($listaNomes) {
    sort($listaNomes);
    return $listaNomes;
}

$listaNomes = ["João", "Maria", "Pedro", "Ana", "Carlos"];
$nomesOrdenados = ordenarNomes($listaNomes);

echo "Nomes ordenados:<br>";
foreach ($nomesOrdenados as $nome) {
    echo $nome . "<br>";
}

?>