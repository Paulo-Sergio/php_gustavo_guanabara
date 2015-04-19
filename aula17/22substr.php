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
            $site = "Curso em Vídeo";
            $sub = substr($site,0,5);
            echo "$sub ".substr($site,9,6);
        ?>
    </div>
</body>

</html>