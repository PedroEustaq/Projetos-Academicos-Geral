<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa Eletrônico</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Caixa Eletrônico</h1>
    <h2>Que Valor você deseja sacar</h2>
    <form action="index.php">
        <input type="number" name="num" id="num">
<input type="submit" value="Enviar">
    </form>

    <?php



    $val = $_GET["num"] ?? 0;
    $cem = $val / 100;
    $cin = $cem / 50;
    $dez = $cin / 10;
    $five = $dez / 5;


    echo "<h2>Saque de $val realizado com sucesso!</h2>";
    echo "<h2>O caixa Eletronico vai te entregar as seguintes notas</h2>";
    echo "<nav><img src=\"https://www.bcb.gov.br/novasnotas/assets/img/section/5/5_front.jpg\"  id=\"nota5\"> <span>".number_format($five, 0)."</span>
    <img src=\"https://www.bcb.gov.br/novasnotas/assets/img/section/10/10_front.jpg\"  id=\"nota5\"><span>".number_format($dez, 0)."</span>
    <img src=\"https://www.bcb.gov.br/novasnotas/assets/img/section/50/50_front.jpg\"  id=\"nota5\"><span>".number_format($cin, 0)." </span>
    <img src=\"https://www.bcb.gov.br/novasnotas/assets/img/section/100/100_front.jpg\"  id=\"nota5\"><span>".number_format($cem, 0)."</span> </nav>"
    ?>
</body>
</html>