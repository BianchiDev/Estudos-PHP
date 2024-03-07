<?php
include('config.php');
include('users.php');
include('produtos.php');
include('db.php');
function getPagina()
{
  $url = $_SERVER['REQUEST_URI'];
  $url = explode("?", $url);
  $url = $url[0];

  $metodo = $_SERVER['REQUEST_METHOD'];

  if ($metodo == "GET") {
    switch ($url) {
      case "/":
        $produtos = getProdutos();
        include("Pages/home.php");
        break;
      case "/home":
        $produtos = getProdutos();
        include("Pages/home.php");
        break;
      case "/sobre";
        include("Pages/sobre.php");
        break;
      case "/contato";
        include("Pages/contato.php");
        break;
      case "/busca":
        $produtos = buscaProduto($_GET['busca']);
        include("Pages/home.php");
        break;
        case "/info";
        include("Pages/info.php");
        break;
      default:
        $produtos = getProdutos();
        include("Pages/home.php");
        break;
    }
  }
}
