<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atv.1</title>
</head>
<body>
    <h1>Impressão de dois valores</h1>
    <?php
    $valor1 = $_GET['v1'];
    $valor2 = $_GET['v2'];

    $soma = $v1 + $v2;

    if ($soma >20){

        $soma = $soma += 8;
    }

    elseif ($soma <=20){

        $soma = $soma -= 5;

    }
    echo "o resultado é: $soma"
    ?>
</body>
</html>