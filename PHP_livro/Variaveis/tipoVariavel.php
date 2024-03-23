<!-- Para criar referência entre variáveis, ou seja, duas variáveis apontando para a mesma região da memória, a atribuição deve ser precedida pelo operador &. 
Assim qualquer alteração em qualquer uma das variáveis reflete na outra.  -->

<?php
$a = 5;
$b = &$a;
$b = 10;
echo $a  . " : o resultado da variável A" . "\n";
echo $b  . " : o resultado da variável B" . "\n";
