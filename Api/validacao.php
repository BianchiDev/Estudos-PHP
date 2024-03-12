<?php
/**
 * Função para validar dados de produtos.
 *
 * @param array $dados - Os dados do produto a serem validados.
 * @return string - Mensagem de erro, se houver. Caso contrário, uma string vazia.
 */
function validaProdutos($dados)
{
    // Inicializa a variável de erro
    $erro = '';

    // Verifica se o campo 'titulo' está vazio
    if ($dados['titulo'] == '') {
        $erro .= '<p>Preencha um Título!</p>';
    }

    // Verifica se o campo 'descricao' está vazio
    if ($dados['descricao'] == '') {
        $erro .= '<p>Preencha uma descrição!</p>';
    }

    // Verifica se o campo 'valor' está vazio
    if ($dados['valor'] == '') {
        $erro .= '<p>Preencha um valor!</p>';
    }

    // Retorna a mensagem de erro (pode ser uma string vazia se não houver erros)
    return $erro;
}
