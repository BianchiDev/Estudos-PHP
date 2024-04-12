<!-- 
    Criando a classe pessoa com seus atributos e seus metodos 
-->

<?php
class Pessoa
{
    var $Codigo;
    var $Nome;
    var $Altura;
    var $Idade;
    var $Nascimento;
    var $Escolaridade;
    var $Salario;

    /* método Crescer
    aumenta a altura em $centimentros
    */
    function Crescer($centimentros){
        if($centimentros >0){
            $this->Altura += $centimentros;
        }
    }
    /*método Formar 
     * Altura a Escolaridade para $titulacao
     */

     function Formar($titulacao){
        $this->Escolaridade = $titulacao;
     }
     /*métodio Envelhecer 
      * aumenta a Idade em $anos
      */
      function Envelhecer($anos){
        if($anos > 0){
            $this->Idade += $anos;
        }
      }
}
?>