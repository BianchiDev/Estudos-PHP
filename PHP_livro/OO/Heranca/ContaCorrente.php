<?php

class ContaCorrente extends Conta_a
{
    var $Limite;

    /** método construtor (sobrescrito)
     * agora, também inicializa variável $Limite
     */
    function __construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo, $Limite)
    {
        //Chamada do método construtor da classe pai.
        parent:: __construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo);
        $this->Limite = $Limite;
    }

    /* método Retirar(sobrecristo)
     * verifica se a $quantia retirada está dentro do limite.
     */
    function Retirar($quantia)
    {
        //imposto sobre movimentação financeira
        $cpmf = 0.05;

        if(($this->Saldo + $this->Limite) >= $quantia)
        {
            //Executa método da classe-pai.
            parent:: Retirar($quantia);

            //Debita o Imposto
            parent:: Retirar($quantia * $cpmf);
        }
        else
        {
            echo "Retirada não permitida... \n";
            return false;
        }
        //retiurada permitida
        return true;
    }
}