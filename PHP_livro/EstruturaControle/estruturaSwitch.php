<!-- 
    O  comando switch é uma estrutura que simula uma bateria de testes sobre uma variáveil.
É similar a uma série de comandos IF sobre a mesma expressão.
Frequentemente, é necessário comparar a mesma variável com valores diferentes e executar uma ação expecífica em cada um casos.

No fluxograma a seguir vemos que, para cada teste condicional (CASE), existe um bloco de comandos a ser executado caso
a expressão retorne falso(FALSE), o switch parte para a próxima expressão a ser avaliada, até que não tenha mais expressões para avaliar.
Caso tdas as eexpressões sejam falsas, o switch executará o bloco de códigos representado pelo identificador default. 
-->
<?php
$i = 1;

switch ($i) {
    case 0:
        print "i é igual a 0" .  "\n";
        break;

    case 1:
        print "i é igual a 1" . "\n";
        break;

    case 2:
        print "i é igual a 2" . "\n";
        break;
    default:
        print "i não é igual a 0, 1 ou 2" . "\n";
}
?>