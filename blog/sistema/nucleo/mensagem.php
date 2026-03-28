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
     * Define a mensagem de sucesso
     * @param string $mensagem
     * @return Mensagem
     */
    public function sucesso(string $mensagem): Mensagem
    {
        $this->css = 'alert alert-success'; // Define a classe CSS para sucesso
        $this->texto = $this->filtrar($mensagem); // Define o texto da mensagem
        return $this; // Retorna a instância atual para permitir encadeamento de métodos
    }

    /**
     * Define a mensagem de alerta
     * @param string $mensagem
     * @return Mensagem
     */
    public function alerta(string $mensagem): Mensagem
    {
        $this->css = 'alert alert-warning'; // Define a classe CSS para alerta
        $this->texto = $this->filtrar($mensagem); // Define o texto da mensagem
        return $this; // Retorna a instância atual para permitir encadeamento de métodos
    }

    /**
    * Define a mensagem de erro
    * @param string $mensagem
    * @return Mensagem
    */
    public function erro(string $mensagem): Mensagem
    {
        $this->css = 'alert alert-danger'; // Define a classe CSS para erro
        $this->texto = $this->filtrar($mensagem); // Define o texto da mensagem
        return $this; // Retorna a instância atual para permitir encadeamento de métodos
    }

    /**
     * Renderiza a mensagem
     * @return string
     */
    public function renderizar(): string
    {
        return "<div class='{$this->css}'>{$this->texto}</div>"; // Renderiza a mensagem com a classe CSS correspondente
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
