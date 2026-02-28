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
    return $texto;
}

?>