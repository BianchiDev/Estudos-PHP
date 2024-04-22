<?php
class Bibliotreca
{
    const Nome = ' GTK ';
}
class Aplicacao extends Bibliotreca
{
    const Ambiente = " Gnome Desktop " ;
    const Versao = " 3.8 ";
    
    /** método construtor
     *  acessa as constantes internamenter
     */
    function __construct($Nome)
    {
        echo parent::Nome . self::Ambiente . self::Versao . $Nome . "\n";
    }
}
// acessa as constantes externamente
echo Bibliotreca::Nome . Aplicacao::Ambiente . Aplicacao::Versao . "\n";

new Aplicacao(' Dia ');
new Aplicacao(' Gimp ');