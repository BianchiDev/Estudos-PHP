<?php
Class Fornecedor
{
    var $Codigo;
    var $RazaoSocial;
    var $Endereco;
    var $Cidade;
    var $Contato;

    #Método construtor
    function __construct()
    {
    //     //instancie novo Contato
    //    $this-> Contato = new contato ;
    }

    #gravar contato
    function SetContato($Nome, $Telefone, $Email)
    {
        // delega chamada de método
        $this->Contato->SetContato($Nome, $Telefone, $Email);
    }
}
?>