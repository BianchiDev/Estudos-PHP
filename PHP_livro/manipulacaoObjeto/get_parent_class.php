<!-- "get_parent_class" Retorna o nome da valsse ancestral(classe-pai). Se o parêmetro for um objeto, retorna o nome da classe ancestral da classe à qual o objeto pertence.
Se o parâmetro for uma string, retorna o nome da classe ancestralda classe passada como parêmentro. -->
<?php

class Funcionario
{
    var $Nome;
    var $Codigo;
}

class Estagiario extends Funcionario
{
    var $Salario;
    var $Bolsa;
}

$jose = new Estagiario;

echo get_parent_class($jose);
echo "\n";
echo get_parent_class('estagiario');