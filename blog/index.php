<?php
//Arquivo index.php responsável pela inicialização do sistema

require_once 'sistema/configuracao.php'; // Inclui o arquivo de configuração do sistema
include_once 'helpers.php'; // Inclui o arquivo de funções auxiliares

// $numero = 5; // Define um número para teste

// while ($numero <= 10) { // Loop para imprimir o número formatado até 10
//     echo $numero++;
// }

// for($i = 0; $i <= 10; $i++) { // Loop para imprimir o número formatado até 10
//     // echo ($i % 2 ? $i . ' é ímpar' : $i . ' é par') . '<br>';
//     echo $i . 'x' . $i . ' = ' . ($i * $i) . '<br>';
// }

// $cpf = '12345678910'; // Exemplo de CPF para validação
$cpf = '00434849138'; // Exemplo de CPF para validação

for ($t = 9; $t < 11; $t++) {
    for ($d = 0, $c = 0; $c < $t; $c++){
        $d += $cpf[$c] * (($t + 1) - $c);
    }
    $d = ((10 * $d) % 11) % 10;
    if ($cpf[$c] != $d) {
        echo "CPF inválido";
    } else {
        echo "CPF válido";
    }
}