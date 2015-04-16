<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="_css/estilo.css" />
</head>

<body>
    <div>
        <form method="get" action="03tabuada-resultado.php">
            
            Numero: <select name="numero">
            <?php
                $v = 1;
                while($v <= 10){
                    echo "<option value='$v'>$v</option>";
                    $v++;
                }
            ?>
            </select>
            <input type="submit" value="Tabuada" class="botao">
        </form>
    </div>
</body>

</html>