<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <?php
        $txt = isset($_GET['t'])?$_GET['t']:"Texto generico";
        $tam = isset($_GET['tam'])?$_GET['tam']:"12pt";
        $cor = isset($_GET['cor'])?$_GET['cor']:"#000";
    ?>
    <style>
        span.texto{
            font-size: <?php echo $tam; ?>;
            color:<?php echo $cor; ?>;
        }
    </style>
</head>

<body>
   <div>
    <?php 
        echo "<span class='texto'>$txt</span>";
    ?>
    <br/>
    <a href="03exercicio.html">Voltar</a>
    </div>
</body>

</html>