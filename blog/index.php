<?php 
//Arquivo index.php responsável pela inicialização do sistema

require_once 'sistema/configuracao.php'; // Inclui o arquivo de configuração do sistema
include_once 'helpers.php'; // Inclui o arquivo de funções auxiliares

$texto = "Este é um exemplo de texto longo que será resumido.";

/*
echo $total = mb_strlen(trim($texto)); // Calcula o número total de caracteres no texto
echo '<hr>'; // Exibe uma linha horizontal para separar a saudação do resumo
echo $resumo = mb_substr($texto, 0, 20) . '...'; // Cria um resumo do texto com os primeiros 20 caracteres
echo '<hr>'; // Exibe uma linha horizontal para separar a saudação do resumo

echo $ocorrencia = mb_strrpos($texto, 'e'); // Encontra a posição da última ocorrência da letra "e" no texto
*/

//echo saudacao(); // Chama a função de saudação definida em helpers.php

echo resumirTexto($texto, 10); // Chama a função de resumo de texto definida em helpers.php
?>