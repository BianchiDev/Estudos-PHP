<!-- Operadores lógicos são utilizados para combinar expressões lógicas entre si, agrupando testes condicionais -->

<?php
// Uso do operador lógico (and)   "Só é verdadeiro quando as tudas variáves tem valores TRUE
$vai_chover = TRUE;
$esta_frio = TRUE;

if($vai_chover and $esta_frio){
    echo '"Não vou sair de casa"' . "\n"; // Uso de aspas duplas dentro de aspas simples.
}

// Uso do operador lógico (xor) "Basta que uma das duas variáveis seja verdadeira para que o programa seja verdadeiro.
$vai_chover = TRUE;
$esta_frio = FALSE;

if($vai_chover xor $esta_frio){
    echo "Vou pensar duas vezes antes de sair" . "\n";
}
// Operador de E lógico (&& ou and):
// Retorna verdadeiro se ambas as expressões forem verdadeiras
$idade = 25;
$temCarteira = true;

if ($idade > 18 && $temCarteira) {
    echo "Pode dirigir";
} else {
    echo "Não pode dirigir" . "\n";
}
echo "\n";

// Operador de OU lógico (|| ou or):
// Retorna verdadeiro se pelo menos uma das expressões for verdadeira
$idade = 16;
$temAutorizacao = false;

if ($idade >= 18 || $temAutorizacao) {
    echo "Pode entrar na festa";
} else {
    echo "Não pode entrar na festa";
}
echo "\n";

// Operador de NÃO lógico (! ou not):
// Inverte o valor de uma expressão
$temPermissao = false;

if (!$temPermissao) {
    echo "Acesso negado";
} else {
    echo "Acesso permitido";
}
echo "\n";

// Exemplo com todos os operadores lógicos combinados:
$temIdade = true;
$temAutorizacaoPais = false;

if ($temIdade && !$temAutorizacaoPais) {
    echo "Não pode assistir ao filme";
} else {
    echo "Pode assistir ao filme";
}
echo "\n";

?>