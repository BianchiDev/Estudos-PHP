<?php
// Um booleano expressa um valor lógico que pode ser verdadeiro ou falso. Para especificar um valor booleano, utiliza-se as palavras-chaves TRUE ou FALSE.
$exibir_nome =  TRUE;

if($exibir_nome){
    echo'José  da Silva';
}
$umidade = 91;

$vai_chover = ($umidade > 90);

if($vai_chover){
    echo "\n" . 'Está chovendo';
}
// São considerados valores falsos em comparações booleanas:

// Inteiro O

// Ponto flutuante O.O

// Uma string vazua "" ou '0'

// Um array vazio

// Um objeto sem elementos

// tipo NULL
?>