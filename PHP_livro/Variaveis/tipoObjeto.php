<!-- Um objeto é uma entidade com um determinado comportamento definido por seus método(ações) e propriedades (dados).
Para criar um objeto do tipo Computador e aprenda -->

<?php
class Computador{
    var $cpu;
    function ligar(){
        echo "Ligando computador a {$this -> cpu}...";
    }
}

$obj = new Computador;
$obj -> cpu = "500Mhz";
$obj -> Ligar()
?>