<?php
#carrega as classes

include './Funcionario.class.php';
include './Estagiario.class.php';

$pedrinho = new Funcionario;
$pedrinho->Nome = 'Pedrinho';

$mariana = new Estagiario;
$mariana->Nome = 'Mariana';

echo $pedrinho->Nome . "\n";
echo $mariana->Nome;