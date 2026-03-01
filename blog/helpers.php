<?php

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

function resumirTexto(string $texto, int $limite, string $continue = '...'): string{
    $textoLimpo = trim($texto); // Remove espaços em branco do início e do fim do texto

    if(mb_strlen($textoLimpo) <= $limite) {
        return $texto; // Retorna o texto original se ele for menor ou igual ao limite
    }

    $resumirTexto = mb_substr($textoLimpo, 0, mb_strrpos(mb_substr($textoLimpo, 0, $limite), '')) . $continue; // Cria um resumo do texto com o limite especificado e adiciona a continuação

    return $resumirTexto;
}

?>