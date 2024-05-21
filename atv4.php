<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atv4</title>
</head>
<!--Entrar com 3 números e imprimi-los em
ordem decrescente (suponha números
diferentes )-->
<body>
    <?php
    $n1=$_GET["N1"];
    $n2=$_GET["N2"];
    $n3=$_GET["N3"];
    $numeros = array( 'N1', 'N2', 'N3');

    // Inverter a ordem dos elementos do array

$nUmeros = array_reverse($numeros);

// Classificar o array em ordem decrescente

rsort($numeros);

// Imprimir os números na tela

foreach ($numeros as $numeros) {

 echo $numeros . "\n";

}
    
    ?>
</body>
</html>