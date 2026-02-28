<?php 
//Arquivo index.php responsável pela inicialização do sistema

require_once 'sistema/configuracao.php'; // Inclui o arquivo de configuração do sistema
include_once 'helpers.php'; // Inclui o arquivo de funções auxiliares

// $texto = "Este é um exemplo de texto longo que será resumido.";

echo saudacao(); // Chama a função de saudação definida em helpers.php
// echo '<hr>'; // Exibe uma linha horizontal para separar a saudação do resumo
// echo resumirTexto($texto, 50); // Chama a função de resumo de texto definida em helpers.php
?>