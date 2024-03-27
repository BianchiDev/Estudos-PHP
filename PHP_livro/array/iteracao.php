<!-- Os array podem ser iterados no PHP pelo operador FOREACH, percorrendo cada uma das posições do array. -->

<?php
$frutas['cor'] = 'vermelho';
$frutas['sabor'] = 'doce';
$frutas['formato'] = 'redonda';
$frutas['nome'] = 'maçã';

foreach($frutas as $chave => $frutas){
    echo "$chave => $frutas \n";
}
?>