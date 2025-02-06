<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anatomia de uma divisão</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $valor1 = $_GET['n1'] ?? 0;
    $valor2 = $_GET['n2'] ?? 0;
    
    ?>
    <form action="index.php" method="get">
        <input type="number" name="n1" id="n1" value="<?php echo $valor1 ?>">
        <input type="number" name="n2" id="n2"value="<?php echo $valor2 ?>">
        <input type="submit" value="Enviar">
    </form>
    <?php 
    $v1 = $_GET["n1"] ?? 0;
    $v2 = $_GET["n2"] ?? 0;


    if ($v1 == 0 && $v2 == 0) {
        echo "<h2>⬆️Mude os números para fazer uma equação, zero não é permitido.</h2>";
    } else {

    if ($v1 == 0 || $v2 == 0) {
        echo "<h2>Zero não é permitido.</h2>";
    } else {

    


    

    $v3 = $v1 % $v2;
    $v4 = $v1 / $v2;
    echo "<section3>
    <section>
    <h1 name=\"n1\">". $v1 . "</h1>
    </section>
    <sectionDaLe>
    <h1 name=\"n2\">". $v2 ."</h1>
    </sectionDaLe>
    <section2>
    <h1>". $v3 ."</h1>
    </section2>
    <sectionDoPe>
    <h1>".$v4 ."</h1>
    </sectionDoPe>
    </section3>";
    }
}
    ?>
</body>
</html>