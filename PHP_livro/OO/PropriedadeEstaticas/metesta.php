<?php
class Aplicacao
{
    static function Sobre()
    {
        $fd = fopen('readme.txt', 'r');
        while ($linha = fgets($fd, 200)) {
            echo $linha;
        }
    }
}
echo "Informações sobre a aplicação: \n";
echo "=================================:\n";
Aplicacao::Sobre();