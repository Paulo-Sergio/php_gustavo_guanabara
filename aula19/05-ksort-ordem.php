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
            $v = array(2=>"A",5=>"J",0=>"M",3=>"X",4=>"K");
            print_r($v);
            ksort($v);
            //krsort($v);
            print_r($v);
        ?>
        </pre>
    </div>
</body>

</html>