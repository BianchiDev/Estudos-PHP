<!-- 
    Criando a Classe Conta com seus atributos e métodos 
-->


<?php
class Conta{
    
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
}

