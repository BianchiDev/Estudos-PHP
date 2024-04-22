<?php
#carrega as classes 
include './Funcionario.class.php';
include './Estagiario.class.php';

$pedrinho = new Estagiario;
$pedrinho->SetSalario(248);
echo 'O salário de pedrinho é R$: ' . $pedrinho->GetSalario() . "\n";