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
            $n = isset($_GET['num'])?$_GET['num']:0;
            $o = isset($_GET['oper'])?$_GET['oper']:1;
            switch($o){
                case 1:
                    $r = $n * 2;
                    break;
                case 2:
                    $r = pow($n,3);
                    break;
                case 3:
                    $r = sqrt($n);
                    break;
            }
            echo "O resultado da operação solicitada foi <span class='foco'>$r</span>";
        ?>
        <br/>
        <p><a href="exercicio01.html" class="botao">Voltar</a></p>
    </div>
</body>

</html>