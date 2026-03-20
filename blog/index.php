<?php
//Arquivo index.php responsável pela inicialização do sistema

require_once 'sistema/configuracao.php'; // Inclui o arquivo de configuração do sistema
include_once 'helpers.php'; // Inclui o arquivo de funções auxiliares

// Testes da função slug
echo slug("OLÁ MUNDO") . "<br>";
echo slug("Teste com acentos: ÀÁÂÃÄÅ") . "<br>";
echo slug("String com espaços e símbolos @#$%") . "<br>";
echo slug("Outro teste: ÈÉÊËÌÍÎÏ") . "<br>";
echo slug("Teste com caracteres especiais: &*()_+=-{}[]|:;\"/?<>.,") . "<br>";