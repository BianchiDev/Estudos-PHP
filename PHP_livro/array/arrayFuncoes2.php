<?php
//######################## ksort #######################
// Ordena um array prlos seus índices. Para ordem reversa, utilize ksort().

$carro['potência'] = '1.0';
$carro['cor'] = 'branco';
$carro['modelo'] = 'celta';
$carro['opcionais'] = 'ar quente'; 
ksort($carro);
print_r($carro) . "\n";

//######################## explode #######################
// Converte uma string em um array, separando os elementos por meio de um separador.
$string = "32/12/2024";
var_dump(explode("/", $string)) . "\n";

//################### implode ##############################
// Converte um array em uma string separando os elementos do array por meio de um separador.

$padrao = array('maria','Paulo', 'Jose');
$resultado = implode(' + ', $padrao);
var_dump($resultado) . "\n";
?>