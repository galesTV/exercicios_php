<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de moeda</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h1>Resultado da conversão</h1>
        <?php
            $valorEmReais = $_GET['valor'] ?? 0;
            $moedaSelecionada = $_GET['moeda'] ?? 'dolar';
            $valorEmReaisFormatado = number_format($valorEmReais, 2, ',', '.');

            // Define as cotações e símbolos das moedas
            $cotacoes = [
                'dolar' => ['valor' => 5.25, 'simbolo' => 'US$'],
                'euro' => ['valor' => 6.00, 'simbolo' => '€'],
                'libra' => ['valor' => 7.00, 'simbolo' => '£'],
                'iene' => ['valor' => 0.045, 'simbolo' => '¥'],
                'peso' => ['valor' => 0.025, 'simbolo' => '$'],
                'yuan' => ['valor' => 0.78, 'simbolo' => '¥']
            ];

            // Realiza a conversão
            $cotacao = $cotacoes[$moedaSelecionada]['valor'];
            $simbolo = $cotacoes[$moedaSelecionada]['simbolo'];
            $valorConvertido = $valorEmReais / $cotacao;
            $valorConvertidoFormatado = number_format($valorConvertido, 2, ',', '.');

            echo "<p>R$ $valorEmReaisFormatado equivalem a $simbolo <strong>$valorConvertidoFormatado</strong></p>";
        ?>
        <a href="index.html"><button>Voltar</button></a>
    </section>
</body>
</html>
