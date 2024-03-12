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

// Função para buscar produtos que contenham uma determinada string, ignorando maiúsculas/minúsculas
function buscaProdutos($busca)
{
    $produtos = getProdutos();
    $resultados = [];

    foreach ($produtos as $produto) {
        $existe = in_array(strtolower($busca), array_map('strtolower', $produto));
        if ($existe) {
            array_push($resultados, $produto);
        }
    }

    return $resultados;
}

// Função para adicionar produtos no banco de dados
function adicionarProdutos($dados)
{
    $conexao = getConexao();

     // Verifica se o valor é numérico e está dentro do intervalo permitido
     if (!is_numeric($dados['valor']) || $dados['valor'] < 0 || $dados['valor'] > 9999.99) {
        throw new Exception("O valor informado está fora do intervalo permitido.");
    }

    $insert = "INSERT INTO produto (titulo, descricao, valor) VALUES (:titulo, :descricao, :valor)";
    $stmt = $conexao->prepare($insert);
    $stmt->bindValue(':titulo', $dados['titulo']);
    $stmt->bindValue(':descricao', $dados['descricao']);
    $stmt->bindValue(':valor', $dados['valor']);
    $stmt->execute();

    try {
        $stmt->execute();
        return $conexao->lastInsertId();
    } catch (PDOException $e) {
        throw new Exception("Erro ao adicionar produto: " . $e->getMessage());
    }
}

// Função para buscar um produto pelo ID
function buscaProdutoId($id)
{
    $conexao = getConexao();
    $select = "SELECT * FROM produto WHERE id=:id";
    $stmt = $conexao->prepare($select);
    $stmt->bindValue(':id', (int)$id);
    $stmt->execute();

    return $stmt->fetch(\PDO::FETCH_ASSOC);
}

// Função para salvar as alterações em um produto
function salvarProduto($dados)
{
    $conexao = getConexao();
    $update = "UPDATE produto SET titulo=:titulo, descricao=:descricao, valor=:valor WHERE id=:id";
    $stmt = $conexao->prepare($update);
    $stmt->bindValue(':titulo', $dados['titulo']);
    $stmt->bindValue(':descricao', $dados['descricao']);
    $stmt->bindValue(':valor', $dados['valor']);
    $stmt->bindValue(':id', (int)$dados['id']);

    $ret = $stmt->execute();

    return $ret;
}

// Função para deletar um produto pelo ID
function deletarProduto($id)
{
    $conexao = getConexao();
    $delete = "DELETE FROM produto WHERE id=:id";
    $stmt = $conexao->prepare($delete);
    $stmt->bindValue(':id', (int)$id);
    $ret = $stmt->execute();

    return $ret;
}
