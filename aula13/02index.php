<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="_css/estilo.css" />
</head>

<body>
    <div>
       <form method="get" action="02tabuada.php">
           <select name="num">
               <?php
                    for($c=1; $c<=10; $c++){
                        echo "<option>$c</option>";
                    }
                ?>
           </select>
           <input type="submit" value="Tabuada" class="botao"/>
       </form>
    </div>
</body>

</html>