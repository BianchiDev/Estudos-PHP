<!--
     Definição de classe : "Uma classe é uma estrutura que define um tipo de dados, podendo conter atributos
(variáveis) e também funções(métodos) para manipular esses atributos." 
-->

<?php
class Produto
{

    var $Codigo;
    var $Descricao;
    var $Preco;
    var $Quantidade;

    function ImprimeEtiqueta()
    {
        print 'Codigo: ' . $this->Codigo .  "\n";
        print 'Descricao: ' . $this->Descricao .  "\n";
    }
}
?>