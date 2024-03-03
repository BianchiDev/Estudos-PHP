<?php
include('config.php');
include('users.php');

function getPagina()
{
  $url = $_SERVER['REQUEST_URI'];
  $metodo = $_SERVER['REQUEST_METHOD'];   

  if($metodo == "GET"){

  }

    var_dump($_SERVER); exit;
    return include("Pages/home.php");
}
