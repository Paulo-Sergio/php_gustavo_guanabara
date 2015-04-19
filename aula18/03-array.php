<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="_css/estilo.css" />
</head>

<body>
    <div>
      <table border="1"><tr>
       <?php
            $c = range(5,20,2);
            foreach($c as $valor){
                echo "<td>$valor ";
            }
        ?>
        </table>
    </div>
</body>

</html>