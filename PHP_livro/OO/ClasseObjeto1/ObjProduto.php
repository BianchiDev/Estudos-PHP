<!--
    Definição de Objetos: Um Objeto contem exatamente a mesma estrutura e as propriedades de uma classe, no entanto 
sua estrutura é dinâmica, seus atributos podem mudar de valor durante a execução do programa e podemos delcarar
diversos objetos oriundos de uma mesma classe. 
-->
<?php
//Inserir a classe 
include_once './ClasseProduto.php';

//Criando dois objetos

$produt1  = new Produto;
$produt2  = new Produto;
$produt3  = new Produto;

// Atribuir valores 
$produt1->Codigo = 4001;
$produt1->Descricao = 'CD - The Best of Eric Clapton'; 

$produt2->Codigo = 4002;
$produt2->Descricao = 'CD -The Eagles Hotel California';

$produt3->Codigo = 2001;
$produt3->Preco = 2000;

//Imprime informações de etiqueta
$produt1->ImprimeEtiqueta() . "\n";
$produt2->ImprimeEtiqueta() . "\n";
$produt3->ImprimeEtiqueta();