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

        $a = 3;
        $b = '3';
        $r = ($a == $b)?"SIM":"NAO";
        echo "As variaveis A e B são iguais? $r<br/>";
        $r = ($a === $b)?"SIM":"NAO";
        echo "As variaveis A e B são identicas? $r";

    ?>
    </div>
</body>

</html>