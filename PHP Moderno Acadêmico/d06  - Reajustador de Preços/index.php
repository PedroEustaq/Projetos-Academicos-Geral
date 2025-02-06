<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajustador de Preços</title>
</head>
<body>
    <h1>Preço do Produto</h1>
    <form action="index.php" method="get">
        <input type="number" name="preco" id="preco">
        <input type="submit" value="Enviar">
        <h2 id="porc">Qual será o percentual de reajuste? (50%)</h2>
        <input type="range" name="grau" id="grau" max="100" oninput="updatePercentage(this.value)">
    </form>

    <h1>Resultado do Reajuste</h1>
    <?php 
    $preco = $_GET["preco"] ?? 0;
    $descon = $_GET["grau"] ?? 0;
    if ($preco == null) {
        $preco = 0;
        $precofinal = $preco / 100 * $descon;
    } else {
        $precofinal = $preco / 100 * $descon;
    }
    echo "O produto que custava $preco, com reajuste de $descon% agora custa $precofinal.";
    ?>

    <script>
        function updatePercentage(value) {
            var porcElement = document.getElementById("porc");
            porcElement.innerText = "Qual será o percentual de reajuste? ("+ value + "%)";
        }
    </script>
</body>
</html>