<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
            $numero = $_GET['numero'];
            $antecessor = $numero - 1;
            $sucessor = $numero + 1;
            echo "O antecessor de <strong>$numero</strong> é <strong>$antecessor</strong> e o sucessor é <strong>$sucessor</strong>!";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>
</html>