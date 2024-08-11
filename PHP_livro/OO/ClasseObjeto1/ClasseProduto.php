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
        if($this->Codigo != 0 || $this->Codigo != null){
            print  "\n" . 'Codigo: ' . $this->Codigo .  "\n";
        }else{
            print  "\n" .'Código: não informado!!!' .  "\n";
        }
        if($this->Descricao !='' || $this->Descricao != null){
            print 'Descricao: ' . $this->Descricao .  "\n";
        }else{
            print 'Descrição: não informada!!!' .  "\n";
        }
        
        if($this->Preco != 0 || $this->Preco != null){
            print  'Preço: ' . $this->Preco .  "\n";
        }else{
            print 'Preço: não informado!!!'  .  "\n";
        }
    }
}
?>