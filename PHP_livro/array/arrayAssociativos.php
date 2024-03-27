<!-- 
    Os array no PHP são assiciativos pois contêm um chave de acesso para cada posição. 
Para criar um array, pode-se utilizar a função array([chave =>] valor,...). 
-->

<?php
$cores = array('vermelho' => 'FF0000', 'azul' => '0000FF', 'verde' => '00FF00');

// Outra forma de criar um array associativ é simplesmente adicionando-lhe valores com a seguinte sintaxe:

$pessoa['name'] = 'Maria da Silva';
$pessoa['rua'] = 'São João';
$pessoa['bairro'] = 'Cidade Alta';
$pessoa['cidade'] = 'Porto Alegre';

// De qualquer forma, para acessar o array, basta indicar a sua chave entre colchetes:

    print "\n" . "############## Valor das corres #################" . "\n";

    echo 'resultado = ' . $cores['vermelho'] . "\n";
    echo 'resultado = ' . $cores['azul'] . "\n";
    echo 'resultado = ' . $cores['verde'] . "\n";

    print "\n" . "############## Cadastro de pessoa #################" . "\n";

    echo "\n" . 'Nome: ' . $pessoa['name'] . "\n";
    echo 'Rua: ' . $pessoa['rua'] . "\n";
    echo 'Bairro: ' . $pessoa['bairro'] . "\n";
    echo 'Cidade: ' . $pessoa['cidade'] . "\n";