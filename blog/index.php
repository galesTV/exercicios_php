<?php
//Arquivo index.php responsável pela inicialização do sistema

require_once 'sistema/configuracao.php'; // Inclui o arquivo de configuração do sistema
include_once 'helpers.php'; // Inclui o arquivo de funções auxiliares
include_once 'sistema/nucleo/mensagem.php'; // Inclui o arquivo da classe de mensagens

$msg = new Mensagem(); // Cria uma instância da classe de mensagens
echo $msg->renderizar(); // Chama o método renderizar para exibir a mensagem
echo '<hr>';
echo var_dump($msg); // Exibe a estrutura da variável $msg para depuração