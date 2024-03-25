<!-- 
    A função strpad preenche uma string com uma outra string, dentro de um tamanho específico. 
-->

<?php
$texto = "The Beatles";
print str_pad($texto, 20) ."\n";
print str_pad($texto, 20, "*", STR_PAD_LEFT) ."\n";
print str_pad($texto, 20, "*", STR_PAD_BOTH) ."\n";
print str_pad($texto, 20, "*") ."\n";
?>