<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>triangulo</title>
</head>
<body>
    <!--Ler 3 números, os possíveis lados de um
triângulo, e imprimir a classificação de
acordo com tamanho dos lados-->
<!--- equilátero = todos os lados iguais.
isósceles é aquele que possui todos os lados
escaleno quando todos os seus lados possuem medidas diferentes.-->
    <?php
    $lado1=$_GET["l1"];
    $lado2=$_GET["l2"];
    $lado3=$_GET["l3"];

    if($lado1 == $lado2 and $lado3){
        echo "esse triangulo é equilatero.";
    }
    if ($lado1 = $lado2 != $lado3){
        echo "esse triangulo é isosceles.";
    }
    if($lado1 != $lado2 != $lado3){
        echo "esse triangulo é escaleno.";
    }
    
    
    ?>
</body>
</html>