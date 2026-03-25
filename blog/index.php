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
$cpf = '472.830.300-42'; // Exemplo de CPF para validação

var_dump(validarCPF($cpf)); // Chama a função de validação do CPF e exibe o resultado

// echo $limparNumero = preg_replace('/[^0-9]/', '', $cpf); // Remove caracteres não numéricos do CPF