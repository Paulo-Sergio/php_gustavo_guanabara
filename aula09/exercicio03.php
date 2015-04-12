<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <style>
        span{
            color:red;
            font-weight:bold;
        }
        .btn{
            background-color: #273747;
            color: #fff;
            padding:10px;
            margin-top: 5px;
        }
    </style>
</head>

<body>
   <div>
    <?php  
        $n1 = isset($_GET['n1'])?$_GET['n1']:"[nota1 nao informada]";
        $n2 = isset($_GET['n2'])?$_GET['n2']:"[nota2 nao informada]";
        $media = ($n1+$n2)/2;
        echo "A média entre <span>$n1</span> e <span>$n2</span> é igual a <span>$media</span><br/>";

        if($media < 5){
            $situacao = "REPROVADO";
        }else if($media >= 5 && $media <= 7){
            $situacao = "RECUPERAÇÃO";
        }else{
            $situacao = "APROVADO";
        }
        echo "Situação do aluno: <span>$situacao</span><br/>";
    ?>
    <p><a class="btn" href="exercicio03.html">Voltar</a></p>
    </div>
</body>

</html>