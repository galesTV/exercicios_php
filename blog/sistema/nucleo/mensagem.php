<?php

/**
 * Classe Mensagem - responsável por renderizar e filtrar mensagens
 * @author Gael Guzman
 */
class Mensagem
{
    private $texto; // Propriedade para armazenar o texto da mensagem
    private $css; // Propriedade para armazenar a classe CSS da mensagem

    /**
     * Renderiza a mensagem
     * @return string
     */
    public function renderizar(): string
    {
        return $this->texto = $this->filtrar('<h1>Mensagem de teste</h1>'); // Define o texto da mensagem
    }

    /**
     * Filtra a mensagem
     * @param string $mensagem
     * @return string
     */
    private function filtrar(string $mensagem): string
    {
        return filter_var($mensagem, FILTER_DEFAULT); // Filtra a mensagem para remover caracteres indesejados
    }
}
