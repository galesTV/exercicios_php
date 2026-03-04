<?php 
//Arquivo index.php responsável pela inicialização do sistema

require_once 'sistema/configuracao.php'; // Inclui o arquivo de configuração do sistema
include_once 'helpers.php'; // Inclui o arquivo de funções auxiliares

// echo 'R$ ' . formatarValor(50); // Exemplo de uso da função formatarValor
echo formatarNumero(1234567); // Exemplo de uso da função formatarNumero

// $valor = 60; // Define uma variável de exemplo

// if ($valor){
//     echo $valor; // Exibe o valor da variável
// } else {
//     echo 0; // Exibe 0 caso a variável seja avaliada como falsa
// }

// echo ($valor ? $valor : 0); // Utiliza o operador ternário para exibir o valor ou 0

?>