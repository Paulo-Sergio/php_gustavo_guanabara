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
            $d = isset($_GET['ds'])?$_GET['ds']:0;
            switch($d){
                case 2:
                case 3:
                case 4:
                case 5:
                case 6:
                    echo "Estudar";
                    break;
                case 7:
                case 8:
                    echo "Descançar";
                    break;
                default:
                    echo "Dia da semana invalido";
            }
        ?>
        <p><a href="javascript:history.go(-1)" class="botao">Voltar</a></p>
    </div>
</body>

</html>