<!--
     O IF é uma estrutura de controle que introduz um  desvio condicional, ou seja, um desvio na execução natural do program.
Caso dada pela expressão seja satisfeita, então serão executadas as instruções do bloco decomandos.
Caso a codificação não seja satisfatoria, o bloco de comandos será simplesmente ignorado.
O comando IF pode ser lido como   "SE(expressão) Então{ comandos...}" 
-->

<!--
     ELSE  é utilizado ara indicar um novo bloco de comandos delimitado por {}, caso a condição do IF não seja satisfeita. 
Pode ser lido como "caso contrário". A utilização do ELSE é opcional.  
-->
<?php
$a = 1;

if($a ==  5){
    echo   ' "É igual "!' . "\n";
}
else{
    echo'Não é igual' . "\n";
}

// Exemplo 1: Verificar se uma pessoa é maior de idade
$idade = 25;
if ($idade >= 18) {
    echo "Você é maior de idade." . "\n";
} else {
    echo "Você é menor de idade." . "\n";
}

// Exemplo 2: Verificar se uma pessoa possui permissão de acesso
$temPermissao = true;
if ($temPermissao) {
    echo "Acesso permitido." . "\n";
} else {
    echo "Acesso negado." . "\n";
}

// Exemplo 3: Verificar se um número é positivo, negativo ou zero
$numero = -5;
if ($numero > 0) {
    echo "O número é positivo." . "\n";
} elseif ($numero < 0) {
    echo "O número é negativo." . "\n";
} else {
    echo "O número é zero." . "\n";
}

// Exemplo 4: Determinar se um número é par ou ímpar
$numero = 10;
if ($numero % 2 == 0) {
    echo "O número é par." . "\n";
} else {
    echo "O número é ímpar." . "\n";
}

// Exemplo 5: Verificar se um estudante foi aprovado em uma disciplina
$nota = 7;
if ($nota >= 6) {
    echo "Aprovado!" . "\n";
} else {
    echo "Reprovado." . "\n";
}

// Exemplo 6: Verificar se um usuário está logado
$usuarioLogado = true;
if ($usuarioLogado) {
    echo "Bem-vindo!" . "\n";
} else {
    echo "Por favor, faça login." . "\n";
}

// Exemplo 7: Escolher a melhor forma de transporte com base na distância
$distancia = 15;
if ($distancia < 5) {
    echo "Você pode ir a pé." . "\n";
} elseif ($distancia < 20) {
    echo "Você pode pegar um ônibus." . "\n";
} else {
    echo "Você pode pegar um táxi." . "\n";
}

// Exemplo 8: Verificar se um produto está em promoção
$preco = 50;
$promocao = true;
if ($promocao) {
    echo "Este produto está em promoção, por apenas R$ " . $preco . "." . "\n";
} else {
    echo "Este produto não está em promoção, por R$ " . $preco . "." . "\n";
}

// Exemplo 9: Escolher uma refeição com base na hora do dia
$hora = 12;
if ($hora < 12) {
    echo "Bom dia! Que tal um café da manhã?" . "\n";
} elseif ($hora < 18) {
    echo "Boa tarde! Que tal um almoço?" . "\n";
} else {
    echo "Boa noite! Que tal um jantar?" . "\n";
}

// Exemplo 10: Verificar se um número é primo
$numero = 17;
$primo = true;
for ($i = 2; $i <= sqrt($numero); $i++) {
    if ($numero % $i == 0) {
        $primo = false;
        break;
    }
}
if ($primo) {
    echo "O número é primo."  . "\n";
} else {
    echo "O número não é primo." . "\n";
}

// Exemplo 11: Escolher uma atividade com base no clima
$clima = "ensolarado";
if ($clima == "ensolarado") {
    echo "Que tal ir à praia?";
} elseif ($clima == "chuvoso") {
    echo "Que tal assistir a um filme em casa?" . "\n";
} else {
    echo "Que tal fazer uma caminhada no parque?" . "\n";
}

// Exemplo 12: Verificar se uma variável está definida
$variavel;
if (isset($variavel)) {
    echo "A variável está definida." . "\n";
} else {
    echo "A variável não está definida.". "\n";
}

// Exemplo 13: Verificar se uma pessoa pode dirigir
$idade = 20;
$temCarteira = true;
if ($idade >= 18 && $temCarteira) {
    echo "Você pode dirigir." . "\n";
} else {
    echo "Você não pode dirigir." . "\n";
}

// Exemplo 14: Determinar se um número é múltiplo de outro
$num1 = 10;
$num2 = 5;
if ($num1 % $num2 == 0) {
    echo "$num1 é múltiplo de $num2." . "\n";
} else {
    echo "$num1 não é múltiplo de $num2." . "\n";
}

// Exemplo 15: Verificar se um e-mail é válido
$email = "exemplo@example.com";
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "O e-mail é válido." . "\n";
} else {
    echo "O e-mail é inválido." . "\n";
}

// Exemplo 16: Escolher uma forma de pagamento com base no valor da compra
$valorCompra = 100;
if ($valorCompra <= 50) {
    echo "Pagamento em dinheiro." . "\n";
}

$usuario = array(
    "nome" => "João",
    "admin" => false
);

if ($usuario["admin"]) {
    echo "Bem-vindo, " . $usuario["nome"] . "! Você tem permissão de administrador." . "\n";
} else {
    echo "Bem-vindo, " . $usuario["nome"] . "! Você não tem permissão de administrador." . "\n";
}


$dataEntrega = strtotime("2024-03-30");
$dataAtual = time();
$prazoEntrega = strtotime("2024-04-01");

if ($dataEntrega <= $prazoEntrega) {
    echo "A entrega será feita no prazo." . "\n";
} else {
    echo "A entrega estará atrasada." . "\n";
}


$cliente = array(
    "nome" => "Maria",
    "compras" => 5
);

if ($cliente["compras"] >= 5) {
    echo $cliente["nome"] . ", você tem direito a um desconto de fidelidade!" . "\n";
} else {
    echo $cliente["nome"] . ", continue comprando para obter desconto." . "\n";
}

$pesoProduto = 3; // em quilogramas

if ($pesoProduto <= 1) {
    echo "Envio via Correios (PAC)." . "\n";
} elseif ($pesoProduto <= 5) {
    echo "Envio via Correios (SEDEX)." . "\n";
} else {
    echo "Envio via transportadora." . "\n";
}

$usuarioPremium = true;

if ($usuarioPremium) {
    echo "Você tem acesso ao conteúdo premium." . "\n";
} else {
    echo "Para acessar o conteúdo premium, faça upgrade para uma conta premium." . "\n";
}
?>
