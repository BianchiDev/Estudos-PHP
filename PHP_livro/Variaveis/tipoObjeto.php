<!-- Um objeto é uma instância de uma classe em programação orientada a objetos. Ele representa uma entidade com um determinado comportamento definido por seus métodos (ações) e propriedades (dados). As propriedades de um objeto representam o estado do objeto e os métodos representam o comportamento que o objeto pode realizar. A programação orientada a objetos permite modelar o mundo real de forma mais precisa e estruturada, facilitando a organização e manutenção do código. -->

<?php
// Definição da classe Computador
class Computador {
    var $cpu;

    // Método para ligar o computador
    function ligar() {
        echo "Ligando computador a {$this->cpu}...\n";
    }
}

// Criação de um objeto da classe Computador
$obj = new Computador;
$obj->cpu = "500Mhz";
$obj->ligar();

################################################ Funções Simples em Objetos ############################################

// Exemplo de uma classe Pessoa com um método para saudar
class Pessoa {
    var $nome;

    function saudar() {
        echo "Olá, meu nome é {$this->nome}!\n";
    }
}

// Criação de um objeto da classe Pessoa
$pessoa = new Pessoa;
$pessoa->nome = "Maria";
$pessoa->saudar();

// Exemplo de uma classe Calculadora com métodos para somar e subtrair
class Calculadora {
    function somar($num1, $num2) {
        return $num1 + $num2;
    }

    function subtrair($num1, $num2) {
        return $num1 - $num2;
    }

    function multiplicar($num1, $num2) {
        return $num1 * $num2;
    }

    function dividir($num1, $num2) {
        return $num1 / $num2;
    }

    function lerEntrada() {
        // Solicita entrada do usuário
        echo "Digite o primeiro número: ";
        $num1 = readline();

        echo "Digite o segundo número: ";
        $num2 = readline();

        echo "Digite a operação (+ para soma, - para subtração): ";
        $operacao = readline();

         // Realiza a operação com os números fornecidos
         if ($operacao == '+') {
            echo "Resultado da soma: " . $this->somar($num1, $num2) . "\n";
        } elseif ($operacao == '-') {
            echo "Resultado da subtração: " . $this->subtrair($num1, $num2) . "\n";
        } elseif ($operacao == '*') {
            echo "Resultado da multiplicação: " . $this->multiplicar($num1, $num2) . "\n";
        } elseif ($operacao == '/') {
            echo "Resultado da divisão: " . $this->dividir($num1, $num2) . "\n";
        } else {
            echo "Operação inválida!\n";
        }
    }
}

// Cria um objeto da classe Calculadora
$calc = new Calculadora;

// Solicita entrada do usuário e realiza a operação
$calc->lerEntrada();
?>
