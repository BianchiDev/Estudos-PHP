<!-- Um operador de atribuição é utilizado para definir uma variável atribuindo-lhe um valor -->

<?php
$var = 10; // Define a variável $var com o valor 10

$var += 5; // Soma 5 ao valor de $var (agora $var é 15)
echo "Após somar 5: " . $var . "\n";

$var -= 5; // Subtrai 5 do valor de $var (agora $var é 10 novamente)
echo "Após subtrair 5: " . $var . "\n";

$var *= 5; // Multiplica o valor de $var por 5 (agora $var é 50)
echo "Após multiplicar por 5: " . $var . "\n";

$var /= 5; // Divide o valor de $var por 5 (agora $var é 10 novamente)
echo "Após dividir por 5: " . $var . "\n";

$a = 5; // Define a variável $a com o valor 5


echo "Pre-incremento (++\$a): " . ++$a . "\n"; // Incrementa $a em 1 e, em seguida, retorna o valor (agora $a é 6)
echo "Pós-incremento (\$a++): " . $a++ . "\n"; // Retorna o valor de $a e, em seguida, incrementa em 1 (ainda $a é 6)
echo "Valor de \$a após pós-incremento: " . $a . "\n"; // Agora $a é 7
echo "Pré-decremento (--\$a): " . --$a . "\n"; // Decrementa $a em 1 e, em seguida, retorna o valor (agora $a é 6 novamente)
echo "Pós-decremento (\$a--): " . $a-- . "\n"; // Retorna o valor de $a e, em seguida, decrementa em 1 (ainda $a é 6)
echo "Valor de \$a após pós-decremento: " . $a . "\n"; // Agora $a é 5 novamente
?>

