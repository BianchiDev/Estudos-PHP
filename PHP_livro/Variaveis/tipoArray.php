<!-- Array é uma lista de valores armazenados na memória, os quais podem ser de tipos diferentes(números. string, objetos) e podem ser acessados a qualquer momento, 
pois cada valor é relacionado a uma chave. Um array também pode crescer dinamicamente com a adição de novos itens. -->


<?php
$carros = array('palio', 'Corsa', 'Gol');
foreach ($carros as $carro) {
    echo $carro . "\n";
}
?>


<?php
$carros = array('palio', 'Corsa', 'Gol');
echo $carros[0] . "\n"; // Exibe 'palio'
echo $carros[1] . "\n"; // Exibe 'Corsa'
echo $carros[2] . "\n"; // Exibe 'Gol'
?>