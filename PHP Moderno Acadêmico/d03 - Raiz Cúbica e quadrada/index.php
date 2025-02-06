<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raiz Cúbica e quadrada</title>
</head>
<body>
    <h1>Informe um número</h1>
    <form action="index.php" method="get">
        <input type="text" name="res">
        <input type="submit" value="Enviar">
    </form>
    <?php 
    $res = $_GET["res"] ?? 0;
    echo "Resultado Final";
    echo "<h2>Analizando o resultado $res temos:</h2>";
    $raizQuad = sqrt($res);
    $raizCub = pow($res, 1/3);
    echo "Sua Raiz quadrada é $raizQuad";
    echo "<h3>Sua Raiz cúbica é $raizCub</h3>";
    
    ?>
</body>
</html>