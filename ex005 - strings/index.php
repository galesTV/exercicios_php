<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings Heredoc</title>
</head>
<body>
    <?php 
        $canal = "galesTV";
        $ano = date('Y');
        echo <<< TESTE
            Olá pessoal do $canal!<br>
                Tudo bem com vocês?<br>
            Como está sendo esse $ano?<br>
            Abraços! \u{1F44B}
        TESTE;
    ?>
</body>
</html>