<!-- strpos encontra a primeira ocorrência de uma string dentro de outra. -->
<?php
$minha_string = 'O rato roeu a roupa do rei de Roma';
$encotrar = 'roupa';
$posicao = strpos($minha_string, $encotrar);
if($posicao)
{
    echo "\n" . "String encontrada na posição $posicao";
}
else
{
    echo 'String não encontrada';
}
?>