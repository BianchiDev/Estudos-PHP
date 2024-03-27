<!-- Os array podem ser iterados no PHP pelo operador FOREACH, percorrendo cada uma das posições do array. -->

<?php
$frutas['cor'] = 'vermelho';
$frutas['sabor'] = 'doce';
$frutas['formato'] = 'redonda';
$frutas['nome'] = 'maçã';

foreach($frutas as $chave => $valor){
    echo "$chave => $valor \n" . "\n";
}

// As posições de um array podem ser acessadas a qualquer momento, e sobre elas operações podem ser realizadas.
$minha_multa['carro'] = 'Pálio';
$minha_multa['valor'] =  178.00;

// Alteração de valores
$minha_multa['carro'] = 'ED 1.o';
$minha_multa['valor'] += 20.00;


// Exibe o array
var_dump($minha_multa) . "\n";
?>