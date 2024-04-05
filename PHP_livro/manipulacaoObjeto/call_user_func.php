<!-- call_user_func executa uma função ou um método de uma classe passado como parâmetro. Para executar uma função,
basta passar seu nome como uma string, e, para executar um método de um objeto, basta passar o parâmetro como um arraycontendo na 
posição() o objeto e na posição 1 o método a ser executado. Para executar métodos estáticos, basta passar o nome da classe
em vez do objeto na posição 0 do array. -->
<?php
// Exemplo chamada simples
function minhaFuncao()
{
    echo "Minha função! \n";
}

call_user_func('minhafuncao');

// declaração de classe

class minhaClasse
{
     function MeuMetodo()
     {
        echo "Meu método! \n"; 
     }

}
//chama de método estático
call_user_func(array('MinhaClasse', 'MeuMetodo'));

//chama de método
$obj = new minhaClasse();
call_user_func(array($obj, 'MeuMetodo'));