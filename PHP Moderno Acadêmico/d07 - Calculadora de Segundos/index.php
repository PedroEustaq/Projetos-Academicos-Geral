<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculador de Segundos</title>
</head>
<body>
    <h1>Calculadora de Segundos</h1>
    <form action="index.php">
<input type="number" name="seg" id="seg">
<input type="submit" value="Calcular">
    </form>
    <h2>Totalizando Tudo</h2>
    <?php 
    $val = $_GET["seg"] ?? 10;
    $sem = $val / 604800;
    $dia = $val / 86400;
    $hora = $val / 3600;
    $min = $val / 60;

    echo "Analizando o valor que você digitou,$val segundos equivalem a um total de:";
    echo "<h5>".number_format($sem,0). " Semanas</h5>";
    echo "<h5> ".number_format($dia,0). "Dias</h5>";
    echo "<h5>".number_format($hora,0). " Horas</h5>";
    echo "<h5>".number_format($min,0). " Minutos </h5>";
    echo "<h5>".number_format($val,0). "Segundos </h5>";

    
    
    
    ?>
</body>
</html>