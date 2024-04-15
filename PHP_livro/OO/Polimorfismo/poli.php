<?php
include '../ConstruturesEDestrutores/ClassePessoa.php';
include '../ConstruturesEDestrutores/ClasseConta.php';
include '../Heranca/ContaCorrente.php';
include '../Heranca/ContaPoupanca.php';

#Criação do objeto $carlos

$carlos = new Pessoa_a(10, "Carlos da Silva", 1.85, 25, "10/04/1976", "Ensino Médio", 650.00);

echo "Manipulando objetos {$carlos->Nome}: \n";

#Criando o objeto $conta_corrente
$contas[1] = new ContaCorrente(6677, "CC.1234.56", "10/07/2024", $carlos, 9876, 500.00, 200.00);
$contas[2] = new ContaCorrente(6678, "CC.1234.57", "10/07/2024", $carlos, 9876, 500.00, '10/2023');

//PERCORRENDO AS CONTAS
foreach($contas as $key => $Conta_a)
{
    echo "Manipulando a conta $key de:  {$Conta_a->Titular->Nome}: \n";
    echo "O Saldo atual da conta $key é R\$ {$Conta_a->ObterSaldo()} \n";
    $Conta_a->Deposito(200);
    echo "O Saldo atual da conta $key é R\$ {$Conta_a->ObterSaldo()} \n";
    $Conta_a->Retirar(100);
    echo "O Saldo atual da conta $key é R\$ {$Conta_a->ObterSaldo()} \n";
}
// Observação: O PHP não suporta sobrecarga, ou métodos com o mesmo nome, mas assinaturas (parametrização) deferentes.
