<!--
     Uma função é um pedaço de código com um objetivo específico, encapsulado sob uma estrutura única que recebe um conjunto de parâmetros
e retorna um dado. Uma função é declarada uma única vez, mas pode ser utilizada diversas vezes. É uma das estruturas mais básicas para prover reusabilidade. 
-->

<!-- 
    Todas as variáveis decclaradas dentro do ecopo de uma função são locais. Para acessar uma variável externa ao contexto de uma função sem passá-la 
  como parâmetro, é necessário declará-la como global. Uma variável global é acessada a  partir de qualquer ponto da aplicação. No exemplo a seguir, 
  a função criada converte quilômetros para milhas,  enquanto acumula a quantidade de quilômetros percorridos em uma variável global($total).  
-->
<?php
$total = 0;

function km2mi($quilometros){
    global $total;
    $total += $quilometros;
    return $quilometros  *0.6;
}
echo'percorreu ' . km2mi(100). " milhas \n";
echo'percorreu ' . km2mi(200). " milhas \n";
echo'percorreu no total ' . $total. " quilometros \n" . "\n";

?>
<!-- 
    Existem dois tipos de passagem de parâmetros: por valor(by value) e por referência (by reference). Por padrão, os valores são passados 
by value para as funções. Assim, o parâmetro que a função recebe é tratado como variável loal dentro do contexto da funçã, 
não alterando o seu valor externo. 
-->
<?php
// function Incrementa( $variavel, $valor){  // Sem o operador '&' que a passagem de parâmentros por referência, a função tem como resultado "10"  
//     $variavel += $valor;
// }
function Incrementa( &$variavel, $valor){
    $variavel += $valor;
}
$a = 10;
Incrementa($a, 20);
echo $a;
?>