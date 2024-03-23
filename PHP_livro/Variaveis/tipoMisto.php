<!-- O tipo misto (mixed) representa a capacidade de uma função ou parâmetro aceitar múltiplos tipos de dados. Isso significa que a função pode receber argumentos de diferentes tipos de dados e lidar com eles de forma flexível. Um exemplo comum é a função gettype(), que retorna o tipo da variável passada como argumento, podendo ser integer, string, array, objeto, entre outros. -->

<?php
################################################# Tipo Callback  #####################################

// Callback é um tipo de dado que representa uma função a ser executada. Algumas funções, como call_user_func(), aceitam um parâmetro do tipo callback. 
// Um parâmetro callback pode ser o nome de uma função representada por um array.

// Exemplo:
function minhaFuncao($valor) {
    return $valor * 2;
}

// Usando call_user_func() com uma função definida
echo call_user_func('minhaFuncao', 5) . "\n"; // Saída: 10

// Usando call_user_func() com uma função anônima
echo call_user_func(function($valor) { return $valor * 3; }, 5) . "\n"; // Saída: 15

############################################# Tipo Constante ##########################################

// Uma constante é um valor que não pode ser alterado durante a execução do programa. Ela é representada por um identificador, semelhante a uma variável, mas só pode ser composta por valores fixos, como números, strings ou outros valores constantes. 
// As constantes seguem as mesmas regras de nomenclatura das variáveis, exceto que são escritas geralmente em letras maiúsculas e não são precedidas pelo sinal de cifrão ($).

// Exemplo:
define("MAXIMO_CLIENTE", 100);
echo MAXIMO_CLIENTE . "\n"; // Saída: 100
?>
