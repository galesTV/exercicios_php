<?php

function saudacao() {
    $hora = 19; // Simulando a hora atual (19 horas, ou seja, 7 da noite)
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