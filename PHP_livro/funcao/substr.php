<!-- 
    Função substr  retorna parte de uma string  (conteúdo). Retorna uma porção de conteúdo, começando em início, contendo comprimento caracteres.
Se comprimento for negativo, conta n caracteres antes do final. 
-->
<?php
$rest = substr("América", 1);
echo($rest) . "\n";

$rest = substr("América", 1, 3);
echo($rest) . "\n";

$rest = substr("América", 0, -1);
echo($rest) . "\n";

$rest = substr("América",-2);
echo($rest) . "\n";

?>


