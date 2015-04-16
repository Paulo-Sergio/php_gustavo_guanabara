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
            $numero = isset($_GET['numero'])?$_GET['numero']:"[valor não definido]";
            $cont = 0;
            echo "<h3>Analisando o numero $numero...</h3>";
            echo "Valores múltiplos: ";
            for($i = 1; $i <= $numero; $i++){
                if($numero % $i == 0){
                    $valoresMultiplos = $i;
                    $cont++;
                    echo "$valoresMultiplos ";
                }
            }
            echo "<p>Total de múltiplos: $cont</p>";
            if($cont == 2){
                echo "<p>Resultado: <span class='foco'>$numero É PRIMO!</span></p>";
            }else{
                echo "<p>Resultado: <span class='foco'>$numero NÃO É PRIMO!</span></p>";
            }
        ?>
        <p><a href="javascript:history.go(-1)" class="botao">Voltar</a></p>
    </div>
</body>

</html>