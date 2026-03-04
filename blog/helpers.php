<?php

/**
 * Formata o valor para o formato monetário brasileiro, utilizando vírgula como separador decimal e ponto como separador de milhares. Se o valor for avaliado como falso, retorna 0 formatado.
 *
 * @param float $valor Valor a ser formatado.
 *
 * @return string Valor formatado no padrão brasileiro (ex: 1.234,56).
 */
function formatarValor(float $valor): string {
    return number_format(($valor ? $valor : 0), 2, ',', '.'); 
}

/**
 * Formata o número para o formato brasileiro, utilizando ponto como separador de milhares. Se o número for avaliado como falso, retorna 0 formatado.
 *
 * @param string $numero Número a ser formatado.
 *
 * @return string Número formatado com separador de milhares (ex: 1.000.000).
 */
function formatarNumero(string $numero): string {
    return number_format(($numero ? $numero : 0), 0, '.', '.'); 
}

/**
 * Retorna uma saudação com base na hora atual.
 *
 * @return string Mensagem de saudação apropriada ao período do dia.
 */
function saudacao() {
    $hora = date('H'); // Obtém a hora atual no formato de 24 horas
    $saudacao = "";

    if($hora >= 0 && $hora < 12) {
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
function resumirTexto(string $texto, int $limite, string $continue = '...'): string{
    $textoLimpo = trim($texto); // Remove espaços em branco do início e do fim do texto

    if(mb_strlen($textoLimpo) <= $limite) {
        return $texto; // Retorna o texto original se ele for menor ou igual ao limite
    }

    $resumirTexto = mb_substr($textoLimpo, 0, mb_strrpos(mb_substr($textoLimpo, 0, $limite), '')) . $continue; // Cria um resumo do texto com o limite especificado e adiciona a continuação

    return $resumirTexto;
}

?>