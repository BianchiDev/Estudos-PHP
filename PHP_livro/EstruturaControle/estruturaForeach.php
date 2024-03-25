<!--
     O foreach é um laço de repetição para iterações em arrays ou matrizes. 
é  um FOR simplificado que decompõe um vetor ou matrix em cada um de seus elementos por meio de sua cláusula AS. 
-->
<?php
$fruta = array("maçã", "laranja", "pêra", "banana");
foreach($fruta as $valor){
    print "($valor)," . "\n";
}
?>

<!-- 
    CONTINUE
A instrução continue, quando executada em um bloco de comandos FOR/WHILE, ignora as instruções restantes até o fechamento em "}".
Dessa forma, o programa segue para a próxima verificação da condição de entrada do laço de repetição. 
-->
    <!--
         BREAK
O comando BREAK aborda a execução de blocos de comandos, como o IF, WHILE, FOR Quando estamos em uma execução com muitos níveis de iteração e desejamos abortar n níveis, a sintaxe é a seguinte:

while... 
    for.... 
        break<quantidade de níveis> 
            
    -->
