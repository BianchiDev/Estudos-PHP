<!-- 
    O objeto OObjContPessoa manipula os atributos e métodos de Classe pessoa e 
    Classe Conta atribuindo dados e valores. 
-->


<?php
#Carregar as classes
include_once './CasseConta.php';
include_once './CassePessoa.php';

#Criação do Objeto Carlos
$Carlos = new Pessoa;
$Carlos->Codigo = 10;
$Carlos->Nome = 'Carlos da Silva';
$Carlos->Altura = 1.85;
$Carlos->Idade = 25;
$Carlos->Nascimento = '10/02/1988';
$Carlos->Escolaridade = "Ensino Médio";

echo "Manipulando o objeto $Carlos->Nome :\n";

echo "{$Carlos->Nome} é formado em: {$Carlos->Escolaridade} \n";
$Carlos->Formar('Técnico em Eletricidade');
echo "{$Carlos->Nome} é formado em: {$Carlos->Escolaridade} \n";

echo "{$Carlos->Nome} possui {$Carlos->Idade} anos \n";
$Carlos->Envelhecer(1);
echo "{$Carlos->Nome} possui {$Carlos->Idade} anos \n";

#Criação de objeto $conta_carlos

$conta_carlos = new Conta;
$conta_carlos->Agencia = 6677;
$conta_carlos->Codigo = "CC.1234.56";
$conta_carlos->DataDeCriacao = "10/07/24";
$conta_carlos->Titular = $Carlos;
$conta_carlos->Senha = 1234;
$conta_carlos->Saldo = 567.89;
$conta_carlos->Cancelada = false;

echo "\n";
echo "Manipulando a conta de {$conta_carlos->Titular->Nome} \n";
echo "O saldo atual é R$ {$conta_carlos->ObterSaldo()} \n";

$conta_carlos->Deposito(20);
echo "O saldo atual é R$ {$conta_carlos->ObterSaldo()} \n";

$conta_carlos->Retirar(20);
echo "O saldo atual é R$ {$conta_carlos->ObterSaldo()} \n";



