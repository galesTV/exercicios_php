<?php

/** 
* Função para obter a data atual formatada em português.
* @param string $data Data a ser formatada.
* @return string Data formatada no formato "Dia da semana, dia de mês de ano
*/
function dataAtual(): string
{
    $diaMes = date('d'); // Obtém o dia do mês atual
    $diaSemana = date('w'); // Obtém o dia da semana atual (0 para domingo, 1 para segunda-feira, etc.)
    $mes = date('n') - 1; // 'Obtém o número do mês atual (1-12) e subtrai 1 para ajustar ao índice do array de meses
    $ano = date('Y'); // Obtém o ano atual

    $diasSemana = ['Domingo', 'Segunda-feira', 'Terça-feira', 'Quarta-feira', 'Quinta-feira', 'Sexta-feira', 'Sábado']; // Array associativo que mapeia os números dos dias da semana para seus respectivos nomes em português

    $meses = ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro']; // Array associativo que mapeia os números dos meses para seus respectivos nomes em português

    $dataFormatada = $diasSemana[$diaSemana] . ', ' . $diaMes . ' de ' . $meses[$mes] . ' de ' . $ano; // Formata a data no formato "Dia da semana, dia de mês de ano"

    return $dataFormatada; // Retorna a data formatada
}

/**
 * Gera uma URL completa baseada no ambiente (desenvolvimento ou produção).
 *
 * @param string $url URL relativa ou absoluta a ser processada.
 * @return string URL completa.
 */
function URL(string $url): string
{
    $servidor = filter_input(INPUT_SERVER, 'SERVER_NAME'); // Obtém o nome do servidor a partir da variável de ambiente
    $ambiente = ($servidor == 'localhost' ? URL_DESENVOLVIMENTO : URL_PRODUCAO); // Determina o ambiente com base no nome do servidor e retorna a URL correspondente

    if (str_starts_with($url, '/')) {
        return $ambiente . $url; // Retorna a URL completa concatenando o ambiente e a URL fornecida, caso a URL comece com "/"
    }

    return $ambiente . '/' . $url; // Retorna a URL completa concatenando o ambiente e a URL fornecida, caso a URL não comece com "/"
}

/**
 * Verifica se o servidor está rodando em localhost.
 *
 * @return bool Verdadeiro se estiver em localhost, falso caso contrário.
 */
function localhost(): bool
{
    $servidor = filter_input(INPUT_SERVER, 'SERVER_NAME'); // Obtém o nome do servidor a partir da variável de ambiente

    if ($servidor == 'localhost') {
        return true; // Verifica se o nome do servidor é "localhost"
    }
    return false; // Retorna false se o nome do servidor não for "localhost"
}

/**
 * Valida uma URL com verificações básicas.
 *
 * @param string $url URL a ser validada.
 * @return bool Verdadeiro se a URL for válida, falso caso contrário.
 */
function validarURL(string $url): bool
{
    if (mb_strlen($url) < 10) {
        return false; // Verifica se a URL tem pelo menos 10 caracteres
    }
    if (!str_contains($url, '.')) {
        return false; // Verifica se a URL contém um ponto
    }
    if (str_contains($url, 'http://') || str_contains($url, 'https://')) {
        return true; // Verifica se a URL começa com "http://" ou "https://"
    }
    return false; // Retorna false se a URL for inválida
}

/**
 * Valida uma URL usando o filtro FILTER_VALIDATE_URL do PHP.
 *
 * @param string $url URL a ser validada.
 * @return bool Verdadeiro se a URL for válida, falso caso contrário.
 */
function validarURLComFiltro(string $url): bool
{
    return filter_var($url, FILTER_VALIDATE_URL);
}

/**
 * Valida um endereço de e-mail usando o filtro FILTER_VALIDATE_EMAIL do PHP.
 *
 * @param string $email E-mail a ser validado.
 * @return bool Verdadeiro se o e-mail for válido, falso caso contrário.
 */
function validarEmail(string $email): bool
{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

/**
 * Conta o tempo decorrido desde uma determinada data.
 *
 * @param string $data Data de referência.
 *
 * @return string Tempo decorrido no formato legível.
 */
function contarTempo(string $data): string
{
    $agora = strtotime(date('Y-m-d H:i:s')); // Converte a data para timestamp
    $tempo = strtotime($data); // Converte a data fornecida para timestamp
    $diferenca = $agora - $tempo; // Calcula a diferença em segundos

    $segundos = $diferenca;
    $minutos = round($diferenca / 60);
    $horas = round($diferenca / 3600);
    $dias = round($diferenca / 86400);
    $semanas = round($diferenca / 604800);
    $meses = round($diferenca / 2629440);
    $anos = round($diferenca / 31553280);

    if ($segundos <= 60) {
        return 'Há poucos segundos';
    } else if ($minutos <= 60) {
        return $minutos == 1 ? 'Há 1 minuto' : 'Há ' . $minutos . ' minutos';
    } else if ($horas <= 24) {
        return $horas == 1 ? 'Há 1 hora' : 'Há ' . $horas . ' horas';
    } else if ($dias <= 7) {
        return $dias == 1 ? 'Há 1 dia' : 'Há ' . $dias . ' dias';
    } else if ($semanas <= 4) {
        return $semanas == 1 ? 'Há 1 semana' : 'Há ' . $semanas . ' semanas';
    } else if ($meses <= 12) {
        return $meses == 1 ? 'Há 1 mês' : 'Há ' . $meses . ' meses';
    } else {
        return $anos == 1 ? 'Há 1 ano' : 'Há ' . $anos . ' anos';
    }
}

/**
 * Formata o valor para o formato monetário brasileiro, utilizando vírgula como separador decimal e ponto como separador de milhares. Se o valor for avaliado como falso, retorna 0 formatado.
 *
 * @param float $valor Valor a ser formatado.
 *
 * @return string Valor formatado no padrão brasileiro (ex: 1.234,56).
 */
function formatarValor(float $valor): string
{
    return number_format(($valor ? $valor : 0), 2, ',', '.');
}

/**
 * Formata o número para o formato brasileiro, utilizando ponto como separador de milhares. Se o número for avaliado como falso, retorna 0 formatado.
 *
 * @param int $numero Número a ser formatado.
 *
 * @return string Número formatado com separador de milhares (ex: 1.000.000).
 */
function formatarNumero(int $numero): string
{
    return number_format(($numero ? $numero : 0), 0, '.', '.');
}

/**
 * Retorna uma saudação com base na hora atual.
 *
 * @return string Mensagem de saudação apropriada ao período do dia.
 */
function saudacao()
{
    $hora = date('H'); // Obtém a hora atual no formato de 24 horas
    $saudacao = "";

    if ($hora >= 0 && $hora < 12) {
        $saudacao = "Bom dia!";
    } else if ($hora >= 12 && $hora < 18) {
        $saudacao = "Boa tarde!";
    } else {
        $saudacao = "Boa noite!";
    }

    return $saudacao;
}

/**
 * Gera um resumo do texto até um determinado limite de caracteres.
 *
 * @param string $texto    Texto original a ser resumido.
 * @param int    $limite   Número máximo de caracteres para o resumo.
 * @param string $continue Texto a ser adicionado ao final caso o texto seja cortado (padrão "...").
 *
 * @return string Texto resumido com possível continuação.
 */
function resumirTexto(string $texto, int $limite, string $continue = '...'): string
{
    $textoLimpo = trim($texto); // Remove espaços em branco do início e do fim do texto

    if (mb_strlen($textoLimpo) <= $limite) {
        return $texto; // Retorna o texto original se ele for menor ou igual ao limite
    }

    $resumirTexto = mb_substr($textoLimpo, 0, mb_strrpos(mb_substr($textoLimpo, 0, $limite), '')) . $continue; // Cria um resumo do texto com o limite especificado e adiciona a continuação

    return $resumirTexto;
}
