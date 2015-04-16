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
            $t = "Texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto texto";
            $r = wordwrap($t, 8, "<br/>\n", true);
            echo $r;
        ?>
    </div>
</body>

</html>