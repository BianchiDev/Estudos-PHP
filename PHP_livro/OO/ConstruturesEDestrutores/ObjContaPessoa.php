<?php
include './CasseConta.php';
include './ClassePessoa.php';

#Criação do objeto $carlos
$carlos = new Pessoa_a(
    10,
    "Carlos da Silva",
    1.85,
    25,
    "10/02/1976",
    "Ensino Médio",
    650.00
);

echo"Manipulando o objeto {$carlos->Nome}: \n";

echo"{$carlos->Nome} é formado em:  {$carlos->Escolaridade} \n";
$carlos->Formar('Técnico em Eletricidade');
echo"{$carlos->Nome} é formado em:  {$carlos->Escolaridade} \n";


echo"{$carlos->Nome} possui {$carlos->Idade} anos \n";
$carlos->Envelhecer(1);
echo"{$carlos->Nome} possui {$carlos->Idade} anos \n";

#Criação do Objeto $conta_carlos
$conta_carlos = new Conta(
    6677,
    "CC.1234.56",
    "10/04/24",
    $carlos,
    9876,
    567.89
);

echo "\n";
echo "Manipulando a conta de : {$conta_carlos->Titular->Nome}: \n";