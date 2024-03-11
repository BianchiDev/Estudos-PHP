<?php

// Função para obter a lista de usuários
function getUsuarios()
{
    $dados = [
        ["nome" => "Bianchi", "email" => "bianchi@gmail.com"],
        ["nome" => "Iara", "email" => "iara@gmail.com"],
        ["nome" => "Pedro", "email" => "pedro@gmail.com"]
    ];
    return $dados;
}

// Função para exibir a lista de usuários em formato HTML
function exibirUsuarios()
{
    $usuarios = getUsuarios();
    $html = "<ul>";

    foreach ($usuarios as $usuario) {
        $nome = $usuario["nome"];
        $email = $usuario["email"];
        $html .= "<li>Nome: $nome - E-mail: $email</li>";
    }

    $html .= "</ul>";
    echo $html;
    //return $html;
}
