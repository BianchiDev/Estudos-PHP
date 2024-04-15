<?php
class Conta_a{
    
    var $Agencia;
    var $Codigo;
    var $DataDeCriacao;
    var $Titular;
    var $Senha;
    var $Saldo;
    var $Cancelada;

    /** método Retirada
     * diminui o saldo em quantidade
     */

     function Retirar($quantia){
        if($quantia > 0){
            $this-> Saldo -= $quantia;
        }
     }

     /** método Depósito
      *  aumenta o Saldo em $quantia
      */
    function Deposito($quantia){
        if($quantia > 0 ){
            $this->Saldo += $quantia;
        }
    }
    /** método ObterSaldo
     * Retorna o Saldo Atual
     */
    function ObterSaldo(){
        return $this->Saldo;
    }

    function __construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo)
    {
        $this->Agencia = $Agencia;
        $this->Codigo = $Codigo;
        $this->DataDeCriacao = $DataDeCriacao;
        $this->Titular = $Titular;
        $this->Senha = $Senha;

        #Chamando outros métodos da classe
        $this->Deposito($Saldo);
        $this->Cancelada = false;
    }
    /** método destrutor
     * finalizar objeto
     */

     function __destruct()
     {
        echo "O Objeto conta {$this->Codigo} finalizada...\n";
     }
}
?>