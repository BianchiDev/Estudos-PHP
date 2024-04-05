<!-- Manipulação de objetos nesta seleção, veremos uma série de funções relacionadas à manipulação de objetos. -->
<?php
//####################  get_class_methods  ############################
//Retorna um vetor com os nomrd dos métodos de uma determinada classe.
 

class Funcionario{
    function SetSalario()
    {
    }
    function GetSalario()
    {
    }
    function SetName()
    {
    }
    function GetName()
    {
    }
}
print_r(get_class_methods('Funcionario'));