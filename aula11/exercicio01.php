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
            $c = 10;
            while($c >= 0){
                echo "$c<br/>";
                $c -= 2;//$c = $c -2
            }
        ?>
    </div>
</body>

</html>