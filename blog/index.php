<?php
//Arquivo index.php responsável pela inicialização do sistema

require_once 'sistema/configuracao.php'; // Inclui o arquivo de configuração do sistema
include_once 'helpers.php'; // Inclui o arquivo de funções auxiliares

echo SITE_NOME; // Exibe o nome do site definido na configuração
echo '<hr>';
echo constant('SITE_NOME'); // Exibe o nome do site usando a função constant