<!-- "is_subclass_of" indica se um determinado objeto ou classe é derivado de uma determinada classe. -->

<?php
class Funcionario
{
    var $Codigo;
    var $Nome;
}

class Estagiario extends Funcionario
{
    var $Salario;
    var $Bolsa;
}

$jose = new Estagiario;

if(is_subclass_of($jose, 'Funcionario'))
{
    echo "\n" . "Classe do objeto Jose é derivada de Funcionario";
}
echo "\n";

if(is_subclass_of('Estagiario', 'Funcionario'));
{
    echo "Classe Estagio é derivada de Funcionario";
}
?>