<?php
// Trabalhando com foreach
function getUsuarios(){
    $dados = [
        ["nome" => "Bianchi", "email" => "bianchi@gmail.com"],
        ["nome" => "Iara", "email" => "iara@gmail.com"],
        ["nome" => "Pedro", "email" => "pedro@gmail.com"]
    ];
    return $dados;
}

function exibirUsuario()
{
    $usuarios = getUsuarios();
    $html = "";

    foreach ($usuarios as $chave => $usuarios) {
        $nome = $usuarios["nome"];
        $email = $usuarios["email"];
        $html .= "<li>Nome: $nome - E-mail:  $email</li>";
    }
    echo $html;
    //return $html;
}
?>