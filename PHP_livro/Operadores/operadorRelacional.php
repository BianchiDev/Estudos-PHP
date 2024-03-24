<!-- Operadores relacionais são utilizados para realizar comparações entre valores ou expressões, resultando sempre um valor boolean(TRUE ou FALSE) -->

<?php
// Definindo os valores das variáveis
$a = 5;
$b = 10;

// Operador de igualdade (==)
// Verifica se $a é igual a $b
if ($a == $b) {
    echo "$a é igual a $b";
} else {
    echo "$a não é igual a $b";
}
echo "\n";

// Operador de diferença (!=)
// Verifica se $a é diferente de $b
if ($a != $b) {
    echo "$a é diferente de $b";
} else {
    echo "$a é igual a $b";
}
echo "\n";

// Operador de maior que (>)
// Verifica se $a é maior que $b
if ($a > $b) {
    echo "$a é maior que $b";
} else {
    echo "$a não é maior que $b";
}
echo "\n";

// Operador de menor que (<)
// Verifica se $a é menor que $b
if ($a < $b) {
    echo "$a é menor que $b";
} else {
    echo "$a não é menor que $b";
}
echo "\n";

// Operador de maior ou igual a (>=)
// Verifica se $a é maior ou igual a $b
if ($a >= $b) {
    echo "$a é maior ou igual a $b";
} else {
    echo "$a não é maior ou igual a $b";
}
echo "\n";

// Operador de menor ou igual a (<=)
// Verifica se $a é menor ou igual a $b
if ($a <= $b) {
    echo "$a é menor ou igual a $b";
} else {
    echo "$a não é menor ou igual a $b";
}
echo "\n";

// Função do mundo real: Verificar se um aluno passou de ano com base na nota
function verificarAprovacao($nota) {
    $notaMinima = 7; // Nota mínima para aprovação
    if ($nota >= $notaMinima) {
        return "Aprovado";
    } else {
        return "Reprovado";
    }
}

echo "O aluno está " . verificarAprovacao(8) . "\n"; // Saída: "O aluno está Aprovado"
echo "O aluno está " . verificarAprovacao(5) . "\n"; // Saída: "O aluno está Reprovado"

// Definindo os valores das variáveis
$a = 5;
$b = "5";

// Operador de identidade (===)
// Verifica se $a é idêntico a $b (mesmo valor e mesmo tipo de dado)
if ($a === $b) {
    echo "$a é idêntico a $b";
} else {
    echo "$a não é idêntico a $b";
}
echo "\n";

// Função do mundo real: Verificar se uma pessoa tem acesso especial
function verificarAcessoEspecial($nivel) {
    $nivelEspecial = 5; // Nível especial necessário
    if ($nivel === $nivelEspecial) {
        return "Acesso Especial Concedido";
    } else {
        return "Sem Acesso Especial";
    }
}

echo "A pessoa tem " . verificarAcessoEspecial(5) . "\n"; // Saída: "A pessoa tem Acesso Especial Concedido"
echo "A pessoa tem " . verificarAcessoEspecial("5") . "\n"; // Saída: "A pessoa tem Sem Acesso Especial"


// Exemplo do livro.
$a = 1234;
$b = 1234;

if($a == $b){
    echo '$a e $b são iguais' . "\n";
}
elseif($a != $b){
    echo '$a e $b são diferentes' . "\n";
}

$c = 1234;
$d = 1234;

if($c === $d){
    echo '$c e $d são iguais'. "\n";
}
elseif($a !== $b){
    echo '$c e $d são diferentes' . "\n";
}

// O PHP condidera o valor zero com sendo falso em comparações lógicas. Para evitar erros semânticos em retorno de valores calculados por funções que podem retornar tanto um valor booleano quanto um inteiro,
// podemos utilizar as seguintes comparações

$e = 0; // zero sempre será igual a false

if($e == FALSE){
    echo '$e é falso'. "\n";
}

if($e === FALSE){
    echo
     '$e é do tipo FALSE' . "\n";
}
if ($e === 0){
    echo'$e é zero mesmo';
}

?>
