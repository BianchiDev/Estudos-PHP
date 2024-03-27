<!-- 
    Arrays multidimensionais ou matrizes são arrays nos quais algumas de suas posições podem conter 
outros arrays de forma recursiva. Um array multidimensional pode ser criado pela função array(): 
-->
<?php
$carros = array('Palio' => array('cor' => 'azul',
                                'potência' => '1.0',
                                'opcionais' => 'Ar Cond.' ),
                'Corsa' => array('cor' => 'cinza',
                                'potência' => '1.3',
                                'opcionais' => 'MP3' ),
                'Gol' => array('cor' => 'Branco',
                                'potência' => '1.0',
                                'opcionais' => 'Metálica' ),
);

echo $carros['Palio']['opcionais']; // Resultado = Ar. Cond.
?>

<!-- 
    Outra forma de criar um array multidimencional é simplesmente atribuindo-lhe valores: 
-->

<?php
$carros['Palio']['cor']  = 'azul';
$carros['Palio']['potência'] = '1.0';
$carros['palio']['opcionis'] =  'Ar Cond.';

$carros['Corsa']['cor'] = 'cinza';
$carros['Corsa']['potência'] = '1.3';
$carros['Corsa']['opcionais'] = 'MP3';

$carros['Gol']['cor'] = 'branco';
$carros['Gol']['potência'] = '1.0';
$carros['Gol']['opcionais'] = 'Metálica';

echo $carros['Palio']['opcionais'];
?>
 
 <!-- 
    Para realizar iterações em um array multidimensional é preciso observar quantos níveis ele possui.
 No exemplo a seguir, realizamos uma iteração para o primeiro nível do array( veículo) e,
 para cada iteração, realizamos uma nova iteração, para imprimir suas características.
  -->
<?php
foreach($carros as $modelo => $caracteristicas){
    echo "=> modelo $modelo\n";
    foreach($caracteristicas as $caracteristicas => $valor){
        echo "características as $caracteristicas ==> $valor \n";
    }
}
?>