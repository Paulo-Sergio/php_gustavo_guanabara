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
            $v = array("nome"=>"Paulo",
                      "idade"=>23,
                      "peso"=>65.5);
            $v["fuma"]=true;
            
            foreach($v as $campo => $valor){
                echo "O campo $campo possui o conteudo $valor<br>";
            }
        ?>
    </div>
</body>

</html>