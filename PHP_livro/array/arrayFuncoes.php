<!--
     A seguir veremos uma série de funções utilizadas exclusivamente para manipulação de arrays,
funções de ordenação, intersecção, acesso, dentre outras. 
-->

<?php
// ######################## array_push  #############################################
//Adiciona elementos ao final de um array. Tem o mesmo efeito de utilizar a sintaxe
// int array_push (array nome_array, mixed valor  [,mixed ...])
$a  =  array("verde", "azul", "vermelho");
array_push($a, "amarelo");
var_dump($a);
?>
<?php
//########################## array_pop ######################################
// Remove um valor do  final de um array.
$a  =  array("verde", "azul", "vermelho", "amarelo");
array_pop($a);
var_dump($a);
?>
<?php
//########################## array_shift ######################################
// Remove um valor no início de um array.
$a  =  array("verde", "azul", "vermelho", "amarelo");
array_shift($a);
var_dump($a);
?>
<?php
//########################## array_unshift ######################################
// Adiciona um valor no início de um array.
$a  =  array("verde", "azul", "vermelho", "amarelo");
array_unshift($a, "branco");
var_dump($a);
?>

<?php
//########################## array_pad ######################################
//Preenche um array com um dado valor, determinad quantidade de posições.
$a  =  array("verde", "azul", "vermelho", "amarelo");
array_pad($a, 10, "branco");
var_dump($a);
?>
<?php
//########################## array_reverse ######################################
//Recebe um array e retorna-o na ordem inversa.
$a [0] = 'green';
$a [1] = 'yellow';
$a [2] = 'red';
$a [3] = 'blue';

$b = array_reverse($a,true);
var_dump($b);
?>