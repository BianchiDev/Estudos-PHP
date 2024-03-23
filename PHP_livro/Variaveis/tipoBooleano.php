<!-- Booleano é um tipo de dado em linguagens de programação que pode ter apenas dois
 valores possíveis: verdadeiro (true) ou falso (false). É comumente utilizado em expressões
  lógicas e em estruturas de controle de fluxo, como condicionais e loops, para tomar 
  decisões baseadas em condições de verdade ou falsidade. -->


<?php
// Um booleano expressa um valor lógico que pode ser verdadeiro ou falso. Para especificar um valor booleano, utiliza-se as palavras-chaves TRUE ou FALSE.
$exibir_nome =  TRUE;

$verdadeiro = true; // valor booleano verdadeiro


$falso = false; // valor booleano falso

$temperatura_acima_de_30_graus = true; // variável booleana indicando se a temperatura está acima de 30 graus Celsius


$usuario_logado = false; // variável booleana indicando se o usuário está logado no sistema


$aprovado = true; // variável booleana indicando se um aluno foi aprovado em um exame


$cliente_vip = true; // variável booleana indicando se um cliente é VIP

$pago = false; // variável booleana indicando se uma fatura foi paga

$condicao_atendida = true; // variável booleana indicando se uma condição específica foi atendida

$disponivel = false; // variável booleana indicando se um produto está disponível em estoque


if($exibir_nome){
    echo'José  da Silva';
}
$umidade = 91;

$vai_chover = ($umidade > 90);

if($vai_chover){
    echo "\n" . 'Está chovendo';
}
// São considerados valores falsos em comparações booleanas:

// Inteiro O

// Ponto flutuante O.O

// Uma string vazua "" ou '0'

// Um array vazio

// Um objeto sem elementos

// tipo NULL
?>

<?php
// Exemplo 1: Verificando se uma variável é verdadeira
$verdadeiro = true; // valor booleano verdadeiro

$condicao1 = $verdadeiro;
if ($condicao1) {
    echo "A condição 1 é verdadeira.\n";
}


$condicao1 = false;

// Exemplo 2: Verificando se uma variável é falsa
$condicao2 = $condicao1;
if (!$condicao2) {
    echo "A condição 2 é falsa.\n";
}

// Exemplo 3: Verificando se uma variável é igual a outra
$numero = 10;
if ($numero == 10) {
    echo "O número é igual a 10.\n";
}

// Exemplo 4: Verificando se uma variável é diferente de outra
$idade = 25;
if ($idade != 18) {
    echo "A idade não é igual a 18.\n";
}

// Exemplo 5: Verificando se uma variável é maior que outra
$valor = 15;
if ($valor > 10) {
    echo "O valor é maior que 10.\n";
}

// Exemplo 6: Verificando se uma variável é menor que outra
$quantidade = 5;
if ($quantidade < 10) {
    echo "A quantidade é menor que 10.\n";
}

// Exemplo 7: Verificando se uma variável está dentro de um intervalo
$numero = 7;
if ($numero >= 5 && $numero <= 10) {
    echo "O número está dentro do intervalo de 5 a 10.\n";
}

// Exemplo 8: Verificando se pelo menos uma condição é verdadeira
$idade = 30;
if ($idade < 18 || $idade > 65) {
    echo "A pessoa é menor de 18 anos ou maior de 65 anos.\n";
}

// Exemplo 9: Verificando se uma string está vazia
$texto = "";
if (empty($texto)) {
    echo "O texto está vazio.\n";
}

// Exemplo 10: Verificando se um valor é do tipo booleano
$valor = false;
if (is_bool($valor)) {
    echo "O valor é do tipo booleano.\n";
}
?>
