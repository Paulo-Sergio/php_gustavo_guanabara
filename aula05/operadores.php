<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="_css/estilo.css"/>
</head>

<body>
   <div>
    <?php  
        $n1 = $_GET['a'];
        $n2 = $_GET['b'];
        $media = ($n1 + $n2) / 2;
        echo "<h3>Valores recebidos: $n1 e $n2</h3>";
        
        echo "A soma vale ".($n1+$n2);
        echo "<br/>A subtração vale ".($n1-$n2);
        echo "<br/>A multiplicação vale ".($n1*$n2);
        echo "<br/>A divisão vale ".($n1/$n2);
        echo "<br/>O modulo vale ".($n1%$n2);
        echo "<br/>A média vale $media";
    ?>
    </div>
</body>

</html>