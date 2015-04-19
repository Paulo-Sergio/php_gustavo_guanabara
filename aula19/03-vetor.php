<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="_css/estilo.css" />
</head>

<body>
    <div>
       <pre>
       <?php
            $v = array("A","J","M","X","K");
            print_r($v);
            array_unshift($v, "O");//acrescenta "O" na 1ª posicao da lista
            print_r($v);
            array_shift($v); //elimina a 1ª posicao da lista 
            print_r($v);
        ?>
        </pre>
    </div>
</body>

</html>