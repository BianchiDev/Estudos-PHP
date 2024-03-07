<?php
function getProdutos()
{
    $conexao = getConexao();
    $select = "SELECT * FROM produto";
    $resultado = $conexao->query($select);

    if ($resultado === false) {
        // Tratar erro na execução da consulta (por exemplo, lançar uma exceção)
        throw new Exception("Erro na consulta: " . $conexao->errorInfo()[2]);
    }

    return $resultado->fetchAll(PDO::FETCH_ASSOC);
}

function buscaProduto($busca)
{
    $produtos = getProdutos();
    $resultados = [];

    foreach ($produtos as $produto) {
        foreach ($produto as $valor) {
            if (stripos($valor, $busca) !== false) {
                $resultados[] = $produto;
                break; // Parar a busca se uma correspondência for encontrada
            }
        }
    }

    return $resultados;
}
