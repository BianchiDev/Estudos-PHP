<!-- get_class_vars Retorna um vetor com os nomes das propriedades e conteúdos de uma determinada classe.
Note que são valores estáticos definidos na criação da classe. -->
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

print_r(get_class_vars("Funcionario"));