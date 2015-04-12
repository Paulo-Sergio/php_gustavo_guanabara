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
        $tipo = $_GET['op'];
        echo "Os valores passados foram $n1 e $n2<br/>";
        $r = ($tipo == "s") ? $n1+$n2 : $n1*$n2;
        echo "O resultado será $r";

    ?>
    </div>
</body>

</html>