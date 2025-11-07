<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de número aleatório</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h1>Gerador de número aleatório</h1>
        <form>
            <p>Gerando um número aleatório de 0 a 100...</p>
            <?php
                $numero = rand(0, 100);
                echo "<p>O número gerado foi: <strong>$numero</strong></p>";
            ?>
            <button type="submit">Gerar número aleatório</button>
        </form>
    </section>
</body>
</html>