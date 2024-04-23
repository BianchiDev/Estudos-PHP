<?php
include_once './Fornecedor.class.php';
include_once '../ClasseObjeto1/ClasseProduto.php';

// instanciando Novo Fornecedor;
$fornecedor = new Fornecedor;
$fornecedor->Codigo = 848;
$fornecedor->RazaoSocial = 'Bom Gosto Alimentos S.A';
$fornecedor->Endereco = 'Rua Ipiranga';
$fornecedor->Cidade = 'Poço de Caldas';

//instanciando Novo Produto
$produto = new Produto;
$produto-> Codigo = 462;
$produto-> Descricao = 'Doce de Pêssego';
$produto->Preco = 1.24;
$produto->Fornecedor = $fornecedor;

//imprime atrubutos

echo 'Código : '. $produto->Codigo . "\n";
echo 'Descrição : ' . $produto->Descricao . "\n";
echo 'Código : ' . $produto->Fornecedor->Codigo . "\n";
echo 'Razão social  : ' . $produto->Fornecedor->RazaoSocial . "\n";