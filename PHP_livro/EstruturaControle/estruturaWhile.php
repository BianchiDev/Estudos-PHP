<!--
     O WHILE é uma estrutura de controle similar ao IF. Da mesma forma, possui uma condição para executrar um bloco de comandos.
A diferença primordial é que o WHILE estabelece um laço de repetição, ou seja, o bloco de comandos será executado repetitivamente
enquanto a condição de entrada dada pela expressão for verdadeira. 
Este comando pode ser interpretado como "ENQUANTO(expressão) FAÇA{comandos...}" 
-->
<?php

$a = 1;
while($a  < 5 ){
    print $a;
    $a++;
}
?>
<?php
$mensagens = 0;

// Simulando verificação de novas mensagens a cada 10 segundos, por até 5 vezes
$contador = 1;
while ($mensagens == 0 && $contador <= 5) {
    // Verificar se há novas mensagens na caixa de entrada
    // Se houver, atualizar $mensagens para o número de mensagens encontradas
    // Caso contrário, esperar 10 segundos antes da próxima verificação
    sleep(10); // Aguarda 10 segundos
    $contador++;
}

if ($mensagens > 0) {
    echo "Você tem " . $mensagens . " novas mensagens na caixa de entrada.";
} else {
    echo "Não há novas mensagens na caixa de entrada.";
}

$filaPedidos = array("Pedido1", "Pedido2", "Pedido3");

// Processar cada pedido da fila até que a fila esteja vazia
while (!empty($filaPedidos)) {
    $pedidoAtual = array_shift($filaPedidos); // Remove o primeiro pedido da fila
    echo "Processando pedido: " . $pedidoAtual . "\n";
    // Realizar o processamento do pedido...
}

echo "Todos os pedidos foram processados.";


$mysqli = new mysqli("localhost", "usuario", "senha", "banco_de_dados");

// Consulta para obter todos os usuários
$resultado = $mysqli->query("SELECT * FROM usuarios");

// Exibir informações de cada usuário
while ($usuario = $resultado->fetch_assoc()) {
    echo "ID: " . $usuario['id'] . ", Nome: " . $usuario['nome'] . ", Email: " . $usuario['email'] . "\n";
}

// Fechar conexão com o banco de dados
$mysqli->close();

// $diretorio = "/caminho/do/diretorio";
// $arquivoProcurado = "documento.txt";

// // Procurar pelo arquivo dentro do diretório e subdiretórios
// $encontrado = false;
// $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($diretorio));
// while ($iterator->valid()) {
//     if (!$iterator->isDot() && $iterator->getSubPathname() == $arquivoProcurado) {
//         $encontrado = true;
//         break;
//     }
//     $iterator->next();
// }

// if ($encontrado) {
//     echo "O arquivo '" . $arquivoProcurado . "' foi encontrado.";
// } else {
//     echo "O arquivo '" . $arquivoProcurado . "' não foi encontrado.";
// }


$tempoRestante = 10; // em minutos

echo "Contagem regressiva para o início do evento:\n";
while ($tempoRestante > 0) {
    echo "Tempo restante: " . $tempoRestante . " minutos.\n";
    sleep(60); // Aguarda 1 minuto
    $tempoRestante--;
}

echo "O evento está começando agora!";

$tempoRestante = 10; // em minutos

echo "Contagem regressiva para o início do evento:\n";
while ($tempoRestante > 0) {
    echo "Tempo restante: " . $tempoRestante . " minutos.\n";
    sleep(60); // Aguarda 1 minuto
    $tempoRestante--;
}

echo "O evento está começando agora!";
?>
