<!-- O tipo misto(mixed) representa múltiplos(não  necessariamente todos) tipos de dados em um mesmo parâmetro do tipo  mixed indica que 
a   função aceita diversos tipos de dados como parâmentro. Um exemplo é a função gettype(), a qual obtém o tipo da variável passada
como  parâmetro(que pode ser integer, string, array, objeto, entre outros). -->

<?php
//string gettype (mixed var);


################################################# Tipo callback  #####################################

// Algumas funções como call_user_func() aceitam um parâmetro que signiica uma função a  ser executada. Este tipo de dado é chamado de callback.
// Um parâmetro callback pode ser o nome de uma função representada  por um  array.

############################################# Tipo constante ##########################################

// Uma constante é um valor que não sofre modificações durante a execução do programa. Ela é representada por um identificador, Assim

// como  as variáveis, com a exceção de que só pode ser composto de outros valores, como vetores ou objetos. As regras de nomeclatura de constantes
// seguem as mesma regras das variáveis, com a exceção de que as constantes não são precedidas pelo sinal de cifrão($) e geramente utilizam-e nomes em naiúsculo. 

define("MAXIMO_CLIENTE", 100);
echo MAXIMO_CLIENTE;