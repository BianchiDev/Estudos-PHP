<!-- O tipo enum (enumeração) é um tipo de dado que consiste em um conjunto de constantes nomeadas. Cada constante enum tem um valor associado e esses valores são exclusivos dentro do escopo do enum. O uso de enum permite criar códigos mais legíveis e expressivos, especialmente em situações onde há um conjunto predefinido de opções. No entanto, é importante notar que o suporte para enums pode variar entre linguagens de programação e versões. -->

<?php
// Exemplos de variáveis em PHP
$a = 1234;
echo $a . "\n";

$a = -123;
echo $a . "\n";

$a = 123;
echo $a . "\n";

$a = 0x1A;
echo $a . "\n";

$a = 1.234;
echo $a . "\n";

$a = 4e23;
echo $a . "\n";

############################################## Funções Simples ########################################

// Função para calcular a soma de dois números
function somar($num1, $num2) {
    return $num1 + $num2;
}

echo "Soma de 2 e 3: " . somar(2, 3) . "\n";


// Função para verificar se um número é par
function ehPar($numero) {
    return ($numero % 2 == 0) ? true : false;
}

echo "É 4 par? " . (ehPar(4) ? "Sim" : "Não") . "\n";

// Função para calcular o fatorial de um número
function fatorial($numero) {
    if ($numero <= 1) {
        return 1;
    } else {
        return $numero * fatorial($numero - 1);
    }
}

echo "Fatorial de 5: " . fatorial(5) . "\n";
?>
