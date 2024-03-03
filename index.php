
<?php
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