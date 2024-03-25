<!-- 
    O PHP permite chamada de funções recursivamente. No caso a seguir ciaremos uma função para calcular o fatorila de um número. 
-->
<?php
function Fatorial($numero)
{
    if ($numero == 1)
        return $numero;
    else
        return $numero * Fatorial($numero - 1);
}

echo Fatorial(5) . "\n";
echo Fatorial(7) . "\n";
?>