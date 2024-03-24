<!-- 
    O FOR éuma estrutura de controle um laço de repetição baseado em um contador;
é muito similar ao comando WHILE. O FOR é controlado por um bloco de três comandos que estabelecem uma contagem ou seja, o bloco de comandos será executado um certo número de vezes. 
-->
<?php

 for ($i = 1; $i <= 10; $i++) {
     print $i  . "\n" . "\n";
 }
//   Procure utilizar nomes sugestivos para variáceis, mais em alguns casos específicos, como em contadores, permita-se utilizar variáveis de apenas uma letra, como em contadores,
//   permita-se utilizar variáveis de  apenas uma letra, como no exeplo a seguir:

for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 4; $j++) {
        for ($k = 0; $k < 3; $k++) {
             for ($s = 0; $s < 2; $s++) {
                print $i  . "\n" ;
             }
        }
    }
}
?>