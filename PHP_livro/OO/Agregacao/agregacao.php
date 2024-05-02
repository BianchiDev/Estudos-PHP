<?php
include_once './Cesta.class.php';
include_once '../ClasseObjeto1/ClasseProduto.php';

$produto1 = new Produto;
$produto2 = new Produto;
$produto3 = new Produto;
$produto4 = new Produto;

$produto1->Codigo = 1;
$produto1->Descricao = 'Ameixa';
$produto1->Preco = 1.40;

$produto2->Codigo = 2;
$produto2->Descricao = 'Morango';
$produto2->Preco = 2.24;

$produto3->Codigo = 3;
$produto3->Descricao = 'Abacaxi';
$produto3->Preco = 2.86;

$produto4->Codigo = 4;
$produto4->Descricao = 'Laranja';
$produto4->Preco = 1.14;

$cesta = new Cesta;
$cesta->AdicionarItem($produto4);
$cesta->AdicionarItem($produto3);
$cesta->AdicionarItem($produto2);
$cesta->AdicionarItem($produto1);

echo $cesta->CalculaTotal();
echo "\n";
 $cesta->ExibeLista();