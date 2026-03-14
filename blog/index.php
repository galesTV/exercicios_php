<?php 
//Arquivo index.php responsável pela inicialização do sistema

require_once 'sistema/configuracao.php'; // Inclui o arquivo de configuração do sistema
include_once 'helpers.php'; // Inclui o arquivo de funções auxiliares

echo contarTempo('2012-12-16 09:38:30'); // Chama a função contarTempo com uma data de exemplo

?>