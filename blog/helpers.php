<?php

function validarURL(string $url): bool
{
    if(mb_strlen($url) <10){
        return false; // Verifica se a URL tem pelo menos 10 caracteres
    }
    if(!str_contains($url, '.')){
        return false; // Verifica se a URL contém um ponto
    }
    if(str_contains($url, 'http://') || str_contains($url, 'https://')){
        return true; // Verifica se a URL começa com "http://" ou "https://"
    }
    return false; // Retorna false se a URL for inválida
}

function validarURLComFiltro(string $url): bool
{
    return filter_var($url, FILTER_VALIDATE_URL);
}

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
