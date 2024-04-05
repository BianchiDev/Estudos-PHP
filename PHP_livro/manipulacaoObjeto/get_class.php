<?php
//################## get_class #######################
// get_class retorna o nome da classe a qual um objeto pertence.

class Funcionario
{
    var $Nome;
    var $Codigo;

    function SetSalario()
    {
    }

    function GetSalario()
    {
    }
}
$jose = new Funcionario;
echo get_class($jose);