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
            $frase = "Gosto de estudar Matematica";
            $novafrase = str_ireplace("matematica","PHP",$frase);
            echo $novafrase;
        ?>
    </div>
</body>

</html>