<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php
        // 0x = hexadecimal
        // 0b = binário
        // 0 = octal
        // $numero = 300;
        // $numero = 0x1A; // hexadecimal (26 em decimal)
        // $numero = 0b101011; // binário (43 em decimal)
        // $numero = 0377; // octal (255 em decimal)
        // echo "O valor da variável é $numero";

        // $valor = 300; // inteiro
        // $valor = 3.14; // float
        // $valor = "Olá mundo!"; // string
        // $valor = true; // boolean
        // var_dump($valor);

        // $numero = 3e2; // notação científica (300)
        // echo "O valor da variável é $numero";

        // $array = [1, "texto", 3.14, false];
        // var_dump($array);

        class Pessoa {
            public $nome;
        }

        $pessoa = new Pessoa();
        echo var_dump($pessoa);
    ?>
</body>
</html>