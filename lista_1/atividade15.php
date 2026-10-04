<?php

include("funcoes.php");

echo "<h1>Biblioteca de Funções</h1>";

echo "<h2>1. Calcular IMC</h2>";

$peso = 70;
$altura = 1.75;

echo "IMC: " . calcularIMC($peso, $altura);


echo "<h2>2. Validar e-mail</h2>";

$email = "matheus@email.com";

if (validarEmail($email)) {
    echo "E-mail válido";
} else {
    echo "E-mail inválido";
}


echo "<h2>3. Gerar senha aleatória</h2>";

echo "Senha: " . gerarSenha();


echo "<h2>4. Contar vogais</h2>";

echo "Quantidade de vogais: " . contarVogais("Programacao");


echo "<h2>5. Inverter texto</h2>";

echo "Texto invertido: " . inverterTexto("PHP");


echo "<h2>6. Calcular idade</h2>";

echo "Idade: " . calcularIdade(2009);


echo "<h2>7. Converter moeda</h2>";

echo "Valor convertido: R$ " . converterMoeda(100);


echo "<h2>8. Formatar telefone</h2>";

echo "Telefone: " . formatarTelefone("47999998888");


echo "<h2>9. Gerar saudação</h2>";

echo gerarSaudacao();


echo "<h2>10. Validar senha forte</h2>";

if (validarSenhaForte("Senha123")) {
    echo "Senha forte";
} else {
    echo "Senha fraca";
}

?>