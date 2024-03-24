<!--  Operadores Aritméticos:

    Operadores aitiméticos são utilizados para realização de cálculos matemáticos

+  Adição. 
-  Subtração.
*  Multiplicação.
/  Divisão.
%  Módulo(resto da divisão).
 -->

<?php
// O PHP realiza automaticamente a conversão de tipo em operações:


//Declaração de uma string contendo 10
$a = '10';
// soma + 5
echo $a + 5;

// Adição (+): Soma dois valores.
$soma = 10 + 5;
echo "Soma: " . $soma . "\n"; // Saída: Soma: 15

// Subtração (-): Subtrai o segundo valor do primeiro.
$subtracao = 20 - 8;
echo "Subtração: " . $subtracao . "\n"; // Saída: Subtração: 12

// Multiplicação (*): Multiplica dois valores.
$multiplicacao = 5 * 4;
echo "Multiplicação: " . $multiplicacao . "\n"; // Saída: Multiplicação: 20

// Divisão (/): Divide o primeiro valor pelo segundo.
$divisao = 25 / 5;
echo "Divisão: " . $divisao . "\n"; // Saída: Divisão: 5

// Módulo (%) - Resto da divisão: Retorna o resto da divisão do primeiro valor pelo segundo.
$resto = 10 % 3;
echo "Resto da divisão: " . $resto . "\n"; // Saída: Resto da divisão: 1

// Exemplos do mundo real:

// 1. Cálculo de desconto em uma loja:
$precoProduto = 100;
$desconto = 20; // 20% de desconto
$valorDesconto = $precoProduto * ($desconto / 100);
$precoFinal = $precoProduto - $valorDesconto;
echo "Preço final do produto com desconto: $" . $precoFinal . "\n";

// 2. Cálculo da média de notas de um aluno:
$nota1 = 7;
$nota2 = 8;
$nota3 = 6;
$totalNotas = $nota1 + $nota2 + $nota3;
$media = $totalNotas / 3;
echo "A média do aluno é: " . $media . "\n";

// 3. Conversão de temperatura de Celsius para Fahrenheit:
$temperaturaCelsius = 20;
$temperaturaFahrenheit = ($temperaturaCelsius * 9 / 5) + 32;
echo "A temperatura em Fahrenheit é: " . $temperaturaFahrenheit . "°F\n";
?>