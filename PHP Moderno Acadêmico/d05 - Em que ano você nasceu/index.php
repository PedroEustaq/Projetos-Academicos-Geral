<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Em que ano você nasceu?</title>
</head>
<body>
    <h2>Em que ano você nasceu?</h2>
    <form action="index.php" method="get">
<input type="number" name="num" id="">
<input type="submit" value="Enviar">
    </form>
    <?php 
    $ano = $_GET["num"] ?? 0;
    $anoAtual = date("Y");
    $minhaID = $anoAtual - $ano;
    echo "Em $anoAtual você terá $minhaID anos.";
    
    
    
    ?>
</body>
</html>