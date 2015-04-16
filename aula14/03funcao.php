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
            function soma(){
                $parametros = func_get_args();
                $total = func_num_args();
                $soma = 0;
                for($i=0; $i<$total; $i++){
                    $soma = $soma + $parametros[$i];
                }
                return $soma;
            }

            $resultado = soma(3,5,2,8,9,4,25);
            echo "A soma dos valores é $resultado";
        ?>
    </div>
</body>

</html>