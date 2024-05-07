<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<hi, initial-scale=1.0">
    <title>Meu programa em PHP</title>
</head>
<body>
    <h1>isso é HTML</h1> 
    <?php
        $dia = "terça";
        $clima = "chuvoso";
        $temperatura = 29;

        if($temperatura > 25 ){
            $clima = "ensolarado";
        }elseif($temperatura <= 25 && $temperatura >=18){
            $clima="chuvoso";
        }elseif($temperatura < 18){
            $clima="nevando";
        }
        echo "o clima hoje está $clima a temperatura está $temperatura e o dia hoje é $dia feira.<br>";

        $nomes = array ("hadassa", "fernanda", "pedro", "gabi", "yachiany");
        for($i=0; $i <=5; $i++){
          
            echo "<br>";
            echo $nomes[$i];
        };

        echo "<br><br>";
        $total = 0 ;
        foreach($nome as $nome){
            echo "<br>";
            echo $nomes;
            $total++;
        };

        echo "<br>";
        echo "<b> A quantidade total de nomes é $total </b>";

    ?>
</body>
</html>