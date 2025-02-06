<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promoção Agora</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Salário</h1>
    <form action="index.php" method="get">
        <input type="float" name="n1" id="n1">
        <input type="submit" value="Enviar">


    </form>
    <?php 
    $sal = $_GET["n1"] ?? 0;
    $salmin = $sal / 1385;
    $salFinal = (int) $salmin;
    $salResto = $salFinal * 1385;
    $mais = $sal - $salResto;
    echo "Um Salario de $sal é o equivalente á $salFinal salários minimos + R$$mais";
    
    
    
    ?>
</body>
</html>