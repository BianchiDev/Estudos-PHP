<?php
$nome = "Bianchi";
$sobreNome = "Felipe";
$idade = 36;
$peso = 95.40;
$email  = "ifpebianchi@gmail.com";

$nomeCompleto = $sobreNome." ".$nome;

// Qual a diferença  entre aspas duplas e aspas simples em PHP?


//echo $nomeCompleto;
$msg = "Nome: $nomeCompleto - Idade: $idade - Email: $email";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    
<h2>PHP com HTML</h2>
<h4><?php echo $msg?></h4>
<p><b>Idade: </b><?php echo $idade?></p>
<p><b>Email: </b><?php echo $email?></p>
</body>
</html>