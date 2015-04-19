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
            $frase = "Estou aprendendo PHP";
            $pos = strpos($frase, "PHP");
            echo "<br>A string foi encontrada na posição $pos";
        ?>
    </div>
</body>

</html>