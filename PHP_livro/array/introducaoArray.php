<!-- 
    A manipulação de arrays no PHP é, sem dúvida , um dos recursos mais poderosos da linguagem.
O programador que assimilar bem esta parte terá muito mais produtividade no seu dia-a-dia.
 Isso porque os arrays no PHP servem comom verdadeiros conteineres, servindo para armazenar
números, strings, objetos, dentre outros de forma dinâmica. Além disso, o PHP nos oferece 
uma gama enorme de funções para manipulá-los, as quais serão vistas a seguir: 
-->

  <!-- #########################   Criando um array  ########################## -->

  <!-- 
    Arrays são acessados mediante uma posição, como um índice numérico. Para criar um array, 
  pode-se utilizar a função array([chave =>] valor, ...)

  $cores = array('vermelho','azul','verde', 'amarelo');

  ou 

  $cores = array(0=>'vermelho', 1=>'azul', 2=>'verde', 3=>'amarelo');

   -->

   <!--
     Outra forma de criar um array é simplimente adicionando-lhe valores com a seguinte sintaxe:
    -->
    <?php

    $cores = array('vermelho','azul','verde', 'amarelo');

    $nomes[] = 'maria';
    $nomes[] = 'joão' ;
    $nomes[] = 'carlos';
    $nomes[] = 'josé';

    //De qualquer forma, para acessar o array indexado, basta indicar o seu indice entre colchetes:
      echo  "\n" . $nomes[0]  . " - " . $cores[0] . "\n";
      echo $nomes[1] . " - " . $cores[1] . "\n";
      echo $nomes[2] .  " - " . $cores[2] . "\n";
      echo $nomes[3] . " - " . $cores[3] . "\n";
    
      ?>