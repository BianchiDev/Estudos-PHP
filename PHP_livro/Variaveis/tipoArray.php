<!-- Array é uma estrutura de dados fundamental em linguagens de programação como PHP, que permite armazenar uma coleção ordenada de valores relacionados. Cada valor em um array é associado a uma chave única, que pode ser um número ou uma string, e permite acessar e manipular esses valores de forma eficiente. -->

<!-- Os arrays podem conter valores de diferentes tipos de dados, como números inteiros, números de ponto flutuante, strings, booleanos e até mesmo outros arrays ou objetos. Isso proporciona grande flexibilidade no armazenamento e manipulação de dados em um programa PHP. -->

<!-- Uma das principais características dos arrays em PHP é sua capacidade de crescer dinamicamente. Isso significa que você pode adicionar novos itens ao array a qualquer momento, sem a necessidade de definir um tamanho fixo inicial. Essa flexibilidade é particularmente útil em situações onde o número de elementos é desconhecido ou pode variar ao longo do tempo. -->

<!-- Além disso, os arrays podem ser multidimensionais, o que significa que cada elemento do array pode ser outro array. Isso permite criar estruturas de dados mais complexas e organizadas, como matrizes ou tabelas. -->

<!-- Em resumo, os arrays em PHP são uma ferramenta poderosa e versátil para armazenar e manipular dados de forma eficiente em seus programas, oferecendo flexibilidade, dinamismo e organização. -->

<?php
$carros = array('palio', 'Corsa', 'Gol');
foreach ($carros as $carro) {
    echo $carro . "\n";
}
?>


<?php
$carros = array('palio', 'Corsa', 'Gol');
echo $carros[0] . "\n"; // Exibe 'palio'
echo $carros[1] . "\n"; // Exibe 'Corsa'
echo $carros[2] . "\n"; // Exibe 'Gol'
?>

<?php
// Define um array multidimensional
$matriz = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);

// Acessa um elemento específico do array multidimensional e exibe seu valor
echo $matriz[0][1]; // Saída: 2 (linha 0, coluna 1)
?>

<?php
// Define um array inicial
$cores = array("vermelho", "verde", "azul");

// Remove um elemento específico do array
unset($cores[1]); // Remove o elemento na posição 1 (verde)

// Exibe os elementos restantes do array
foreach ($cores as $cor) {
    echo $cor . "\n";
}
?>

<?php
// Define um array inicial
$frutas = array("Maçã", "Banana", "Laranja");

// Adiciona elementos ao array dinamicamente
array_push($frutas, "Morango", "Abacaxi");

// Exibe todos os elementos do array
foreach ($frutas as $fruta) {
    echo $fruta . "\n";
}
?>

