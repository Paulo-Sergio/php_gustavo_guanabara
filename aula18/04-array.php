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
            $v = array(3=>5,
                        1=>9,
                        0=>8,
                        7=>7);
            unset($v[0]);
            print_r($v);
        ?>
        </pre>
    </div>
</body>

</html>