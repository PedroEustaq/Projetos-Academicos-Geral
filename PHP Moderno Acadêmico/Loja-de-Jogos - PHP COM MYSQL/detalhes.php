<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Jogos</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Anton+SC&family=Inter:opsz@14..32&family=Karla&family=Roboto:ital,wght@0,100..900;1,100..900&family=VT323&display=swap');
    </style>
</head>
<body>
<?php 
    require_once "includes/banco.php";
    require_once "includes/login.php";
    ?>
    <div id="corpo">
        
        <?php 
            require_once "topo.php";
        $cod = $_GET['cod'] ?? 0;
        $busca = $banco->query("select * from jogos where cod =$cod");

        ?>
        <h1>Detalhes do Jogo</h1>
        <table class="detalhes">
            <?php 
            
            while ($reg = $busca->fetch_object()) {
                echo "<tr><td rowspan='3'><img src=". thumb($reg->capa)." class='full'></td>
            <td id='centralizar'><h2>$reg->nome</h2></td>
            <h3>Nota: $reg->nota</h3>
            </tr><td id='descrica'>$reg->descricao </td>
            <tr></tr>";
            if (isAdmin()) {
            } elseif (isEditor()) {
            }
            }
            ?>
            
        </table>
        <a href="index.php"><img src="icones/icoback.png" alt="" onclick="voltarclick()" style="border-radius: 10px;"></a>
    </div>
</body>
<?php 
    require_once 'rodape.php';
$banco->close();?>
</html>