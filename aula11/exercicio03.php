<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="_css/estilo.css" />
</head>

<body>
    <div>
        <?php
            $inicio = $_GET['inicio'];
            $final = $_GET['final'];
            $incremento = $_GET['incremento'];

            if($inicio < $final){
                while($inicio <= $final){
                    echo "$inicio<br/>";
                    $inicio = $inicio + $incremento;
                }
            }elseif($inicio > $final){
                while($inicio >= $final){
                    echo "$inicio<br/>";
                    $inicio = $inicio - $incremento;
                }
            }
            
            
        ?>
        <p><a href="javascript:history.go(-1)" class="botao">Voltar</a></p>
    </div>
</body>

</html>