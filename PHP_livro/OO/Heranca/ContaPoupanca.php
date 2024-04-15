<?php

include '../ConstruturesEDestrutores/CasseConta.php';

class ContaPoupanca extends Conta_a
{
    var $Aniversario;
    
    /**método construtor (sobrescrito)
     * agora, também inicializa a variável $Aniversario;
     */

     function __construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo, $Aniversario)
     {
        //Chamada do método construtor da classe-pai.
        parent::__construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo);
        $this->Aniversario = $Aniversario;
     }
     /**método Retirar(sobrescrito)
      * verifica se há saldo para retirar tal $quantia.
      */
      function Retirar($quantia)
      {
        if($this->Saldo >= $quantia)
        {
            //Executa método da classe-pai.
            parent::Retirar($quantia);
        }
        else
        {
            echo "Retidada não permitida... \n";
        }
        //Retirada permitida
        return true;
      }
}
?>