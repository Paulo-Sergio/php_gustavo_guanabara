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
            $e = isset($_GET['est'])?$_GET['est']:"XX";
            switch ($e) {
                       case "AC":
                       case "AP":
                       case "AM":
                       case "PA":
                       case "RO":
                       case "RR":
                       case "TO":
                           $r = "Regiao Norte";
                           break;
                       case "AL":
                       case "BA":
                       case "CE":
                       case "MA":
                       case "PB":
                       case "PE":
                       case "PI":
                       case "RN":
                       case "SE":
                           $r = "Regiao Nordeste";
                           break;
                       case "DF":
                       case "GO":
                       case "MT":
                       case "MS":
                           $r = "Regiao Centro-Oeste";
                           break;
                       case "ES":
                       case "MG":
                       case "RJ":
                       case "SP":
                           $r = "Regiao Sudeste";
                           break;
                       case "PR":
                       case "RS":
                       case "SC":
                           $r = "Regiao Sul";
                           break;
                       default:
                           $r = "Regiao Invalida";
                   }
            echo "Você mora na <span class='foco'>$r</span>";
        ?>
        <p><a href="javascript:history.go(-1)" class="botao">Voltar</a></p>
    </div>
</body>

</html>