<?php
#carregar a classe
include_once './Funcionario.class.php';

$Pedro = new Funcionario;
//$Pedro->Salario = 'Oitocentos e seis';

$Pedro->SetSalario(876);

echo 'Salário : (R$)' . $Pedro->GetSalario();
?>