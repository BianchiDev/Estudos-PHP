<?php
class Aplicacao
{
    static $Quantidade;

    /**método Construtor
     * incrementa a $Quantidade de Aplicacões
     */
    function __construct($Nome)
    {
        self::$Quantidade ++;
        $i = self::$Quantidade ;
        echo "Nova Aplicação nr . $i: $Nome \n";
    }
}

#criando Objetos
new Aplicacao('Dia');
new Aplicacao('Gimp');
new Aplicacao('Gnumeric');
new Aplicacao('Abiword');
new Aplicacao('Evolution');

echo 'Quantidade de Aplicações = ' . Aplicacao::$Quantidade . "\n";
?>