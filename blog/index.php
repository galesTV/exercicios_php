<?php
//Arquivo index.php responsável pela inicialização do sistema

require_once 'sistema/configuracao.php'; // Inclui o arquivo de configuração do sistema
include_once 'helpers.php'; // Inclui o arquivo de funções auxiliares

echo dataAtual(); // Chama a função dataAtual() para exibir a data atual

// $meses = [
//     'Janeiro',
//     'Fevereiro',
//     'Março',
//     'Abril',
//     'Maio',
//     'Junho',
//     'Julho',
//     'Agosto',
//     'Setembro',
//     'Outubro',
//     'Novembro',
//     'Dezembro'
// ]; // Define um array associativo que mapeia os números dos meses para seus respectivos nomes em português
// foreach ($meses as $indice => $nome) {
//     echo ($indice + 1) . ' - ' . $nome . '<br>'; // Itera sobre o array $meses usando um loop foreach, imprimindo o índice (número do mês) e o nome do mês, seguido por uma quebra de linha HTML
// }

// echo '<hr>'; // Imprime uma linha horizontal para separar o conteúdo
// var_dump($meses); // Imprime o conteúdo do array $meses para depuração

// echo '<hr>'; // Imprime uma linha horizontal para separar o conteúdo
// echo $_SERVER['SCRIPT_FILENAME']; // Imprime o caminho completo do arquivo atualmente em execução
// echo '<hr>'; // Imprime outra linha horizontal para separar o conteúdo
// var_dump($_SERVER); // Imprime o conteúdo do array $_SERVER, que contém informações sobre o ambiente de execução do script