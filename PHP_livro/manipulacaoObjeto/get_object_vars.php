<!-- get_object_vars retorna um vetor com os nomes e conteúdos das propriedades de um objeto. 
São Valores dinâmicos que se alteram de acordo com o ciclo de vida do objeto. -->
<?php
class Funcionario{
    var $Codigo;
    var $Nome;
    var $Salario = 586;
    var $Departamento = 'Contabilidade';

    function SetSalario()
    {
    }
    function GetSalario()
    {
    }
    
}
$jose = new Funcionario;
$jose -> Codigo = 44;
$jose -> Nome = 'José da Silva';
$jose -> Salario += 6000.00;
$jose -> Departamento = 'Comtabilidade';


print_r(get_object_vars($jose));