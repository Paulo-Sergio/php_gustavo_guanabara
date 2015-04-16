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
            $v = $_GET['numero'];
            $contador = 1;
            $resultado = 1;
            echo "<h4>Mostrando a Tabuada de $v</h4>";
            do{
                $resultado = $v * $contador;
                echo "$v X $contador = $resultado<br/>";
                $contador++;
            }while($contador <= 10);
        ?>
        <p><a href="javascript:history.go(-1)" class="botao">Voltar</a></p>
    </div>
</body>

</html>