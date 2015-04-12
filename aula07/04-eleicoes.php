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
        $ano = $_GET['an'];
        $idade = 2014 - $ano;
        echo "Quem nasceu em $ano tem idade de $idade anos,";
        $tipo = ($idade >= 18 && $idade < 65)?"OBRIGATORIO":"NAO OBRIGATORIO";
        echo " e dessa forma seu voto é $tipo";
    ?>
    </div>
</body>

</html>