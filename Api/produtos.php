<?php
// Função para obter todos os produtos do banco de dados
function getProdutos()
{
    $conexao = getConexao(); // Obtém a conexão com o banco de dados
    $select = "SELECT * FROM produto"; // Consulta SQL para selecionar todos os produtos
    $resultado = $conexao->query($select); // Executa a consulta

    if ($resultado === false) {
        // Trata erro na execução da consulta (lança uma exceção)
        throw new Exception("Erro na consulta: " . $conexao->errorInfo()[2]);
    }

    return $resultado->fetchAll(PDO::FETCH_ASSOC); // Retorna os resultados como array associativo
}

// Função para inserir um novo produto no banco de dados
function postProduto($dados)
{
    $conexao = getConexao(); // Obtém a conexão com o banco de dados
    $insert = "INSERT INTO produto(titulo, descricao, valor) VALUES(:titulo, :descricao, :valor)"; // Consulta SQL para inserir um novo produto
    
    try {
        // Verifica se o valor é numérico
        if (!is_numeric($dados['valor'])) {
            throw new Exception("Valor não é suportado: " . $dados['valor']);
        }

        // Prepara a consulta
        $stmt = $conexao->prepare($insert);
        
        // Executa a consulta com os valores fornecidos
        $stmt->execute([
            ':titulo' => $dados['titulo'],
            ':descricao' => $dados['descricao'],
            ':valor' => $dados['valor']
        ]);

        // Retorna o ID do último produto inserido
        return $conexao->lastInsertId();
    } catch (PDOException $e) {
        // Captura exceções durante a inserção e lança uma nova exceção com uma mensagem mais informativa
        throw new Exception("Erro ao inserir produto: " . $e->getMessage());
    }
}

// Função para buscar produtos que contenham uma determinada string
function buscaProduto($busca)
{
    $produtos = getProdutos(); // Obtém todos os produtos
    $resultados = [];

    foreach ($produtos as $produto) {
        foreach ($produto as $chave => $valor) {
            // Verifica se a chave é uma string e se contém a string de busca
            if (is_string($valor) && stripos($valor, $busca) !== false) {
                $resultados[] = $produto; // Adiciona o produto aos resultados
                break; // Para a busca se uma correspondência for encontrada
            }
        }
    }

    return $resultados; // Retorna os resultados da busca
}
