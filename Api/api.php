<?php
include('config.php');
include('users.php');
include('produtos.php');
include('db.php');
include('validacao.php');

// Função para obter a página com base na URL e método HTTP
function getPagina()
{
  // Obtém a URL da requisição
  $url = $_SERVER['REQUEST_URI'];
  $url = explode("?", $url);
  $url = $url[0];

  // Obtém o método HTTP (GET ou POST)
  $metodo = $_SERVER['REQUEST_METHOD'];

  // Trata as requisições GET
  if ($metodo == "GET") {
    switch ($url) {
      case "/":
      case "/home":
        $produtos = getProdutos();
        include("Pages/Home/home.php");
        break;
      case "/sobre":
        include("Pages/sobre.php");
        break;
      case "/contato":
        include("Pages/contato.php");
        break;
      case "/busca":
        $produtos = buscaProduto($_GET['busca']);
        include("Pages/Home/home.php");
        break;
      case "/produto/editar":
        $produtoEdit = buscaProdutoId($_GET['id']);
        $produtos = getProdutos();
        $editando = true;
        include("Pages/Home/home.php");
        break;
      case "/produto/deletar":
        $produtoEdit = deletarProduto($_GET['id']);
        header('location:../');
        break;
      case "/info":
        include("Pages/info.php");
        break;
        case "/produto/deletar":				
				
          $ret = deletarProduto($_GET['id']);
  
          header('location:../');						
          
          break;
      default:
        $produtos = getProdutos();
        include("Pages/Home/home.php");
        break;
    }
  }

  // Trata as requisições POST
  if ($metodo == "POST") {
    switch ($url) {
      case "/produto/adicionar":
        $msg = validaProdutos($_POST);
        if ($msg) {
          $produtos = getProdutos();
          $produtoEdit = $_POST;
          include("Pages/Home/home.php");
          break;
        }
        if (!adicionarProdutos($_POST)) {
          $msg = "Erro ao salvar o registro!";
          $produtos = getProdutos();
          include("Pages/Home/home.php");
          break;
        }
        header('location:../');
        break;
      case "/produto/salvar":
        $msg = validaProdutos($_POST);
        if ($msg) {
          $produtos = getProdutos();
          $produtoEdit = $_POST;
          include("Pages/Home/home.php");
          break;
        }
        if (!salvarProduto($_POST)) {
          $msg = "Erro ao atualizar o registro!";
          $produtos = getProdutos();
          include("Pages/Home/home.php");
          break;
        }
        header('location:../');
        break;
      default:
        $produtos = getProdutos();
        include("Pages/Home/home.php");
        break;
    }
  }
}
