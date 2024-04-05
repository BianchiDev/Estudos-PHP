<!-- method_exists verifica se um determinado objeto possui o método descrito. Podemos verificar a existência
de um método antes de executar por um métofo inexistente. -->
<?php
class Funcionario
{
    var $Codigo;
    var $Nome;

   function GetSalario()
   {
   }
   function SetSalario()
   {
   }
}


$jose = new Funcionario;

if(method_exists($jose, 'SetNome'))
{
    echo "\n" . 'objeto jose possui método SetNome()';
}
echo "\n";

if(method_exists($jose, 'SetSalario'));
{
    echo 'objeto jose possui método SetSalario()';
}
?>
