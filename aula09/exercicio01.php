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
        $ano = isset($_GET['ano'])?$_GET['ano']:1900;
        $idade = date("Y") - $ano;
        echo "Voce nasceu em $ano e tem $idade anos<br/>";

        if($idade >= 18){
            $v = "já pode votar";
            $d = "já pode dirigir";
        }else{
            $v = "não pode votar";
            $d = "não pode dirigir";
        }
        echo "Com essa idade você $v e tambem $d<br/>";
    ?>
    <a href="exercicio01.html">Voltar</a>
    </div>
</body>

</html>