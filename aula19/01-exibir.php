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
            var_dump($v);
            echo "O vetor tem ".count($v)." elementos";
        ?>
        </pre>
    </div>
</body>

</html>