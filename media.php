<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>media</title>
</head>
<body>
    
    <h1>Média dos alunos do 3A SESI Moreno</h1>
    <?php
    $nota1 = $_GET['n1'];
    $nota2 = $_GET['n2'];
    $nota3 = $_GET['n3'];

    $media = round(($nota1 + $nota2 + $nota3) /3);
    echo "a sua media foi $media";
    if ($media >= 8){
        echo "<h4 style= 'color: green'> voce foi aprovado com média</h4> $media"; 
    }
        
    else{
        echo "<h4 style= 'color: red'> voce foi reprovado com média</h4> $media";
    }

    ?>
</body>
</html>