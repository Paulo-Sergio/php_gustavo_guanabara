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
        $v1 = $_GET['x'];
        $v2 = $_GET['y'];
        echo "<h3>Valores recebidos: $v1 e $v2</h3>";
        
        echo "O valor absoluto de $v2 é ".abs($v2);
        echo "<br/>O valor de $v1<sup>$v2</sup> é ".pow($v1, $v2);
        echo "<br/>A raiz de $v1 é ".sqrt($v1);
        echo "<br/>A valor de $v2 é ".round($v2);
        echo "<br/>A parte inteira de $v2 é ".intval($v2);
        echo "<br/>O valor de $v1 em moeda é R$".number_format($v1,2,",",".");
    ?>
    </div>
</body>

</html>