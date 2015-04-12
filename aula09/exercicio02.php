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

        if($idade < 16){
            $tipoVoto = "Nao vota";
        }else if(($idade >= 16 && $idade < 18) || ($idade > 65)){
            $tipoVoto = "Voto opcional";
        }else{
            $tipoVoto = "Voto obrigatorio";
        }
        echo "Para essa idade, $tipoVoto<br/>";
    ?>
    <a href="exercicio02.html">Voltar</a>
    </div>
</body>

</html>