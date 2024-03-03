
<?php
//Trabalhando com for

// function exibirUsuario2(){
//     $usuarios = getUsuarios();
//     $html = "";

//     for($y = 0; $y < count($usuarios); $y++){
//         $nome = $usuarios[$y]['nome'];
//         $email = $usuarios[$y]['email'];
//         $html .= "<li>Nome: $nome - E-mail: $email</li>";
//     }
//      echo $html;
//     //return $html;
// }

include('Api/api.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title><?php echo getInfo("titulo")?></title>
</head>
<body>
    <h2><?php echo getInfo("titulo") ?></h2>
    <h2><?php echo getInfo("descricao") ?></h2>

    <lu>
        <?php echo exibirUsuario()?> 
        <!--<?php exibirUsuario()?> -->
        
    </lu>
</body>
</html>