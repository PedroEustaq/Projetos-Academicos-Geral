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
    $ord = $_GET['o'] ?? "n";
    $pesq = $_GET['pesquisa'] ?? null;
    ?>

    <div id="corpo">
        <?php require_once "topo.php"; ?>
        <?php require_once "includes/funcoes.php"; ?>
        <h1>Escolha seu próximo jogo</h1>
        <?php
        ?>
        <form method="get" action="index.php" id="formID">
            Ordenar <a href="index.php?o=m&pesquisa=<?php echo  $pesq; ?>">Cód</a>
            <a href="index.php?o=p&pesquisa=<?php echo $pesq; ?>"> Produtora</a> 
            <a href="index.php?o=n1&pesquisa=<?php echo $pesq; ?>"> Nota Alta </a>
            <a href="index.php?o=n2&pesquisa=<?php echo $pesq; ?>"> Nota Baixa</a> 
            <a href="index.php">Mostrar Todos</a> 
            <input type="text" name="pesquisa" id="pid">
            <input type="submit" value="Pesquisar" id="btnOK">
        </form>
        <table class='listagem'>
            <?php
            $t = "select j.cod,j.nome,j.capa, g.genero, p.produtora from jogos j
            join generos g on j.genero = g.cod
            join produtoras p on j.produtora = p.cod ";
            $t .=  "where j.nome like '%$pesq%' or p.produtora like '%$pesq%' or g.genero like '%$pesq%' ";
            switch ($ord) {
                case 'n':
                    $t .= "ORDER BY nome;";
                    break;
                case 'p':
                    $t .= "ORDER BY produtora;";
                    break;
                case 'n1':
                    $t .= "ORDER BY nota DESC;";
                    break;
                case 'n2':
                    $t .= "ORDER BY nota ASC;";
                    break;
            }

            $busca = $banco->query($t);
            if (!$busca) {
                echo "deu m";
            } else {
                while ($reg = $busca->fetch_object()) {
                    echo "<tr><td id='imgSolo'><img src=" . thumb($reg->capa) . " id='super'></td><td><a id='hyperlink' href='detalhes.php?cod=$reg->cod'>$reg->nome </a>[$reg->genero][$reg->produtora]</td></tr>";
                    if (isAdmin()) {
                      /*  echo "<td><i class='material-icons'>add_circle</i> | <i class='material-icons'>edit</i>| <i class='material-icons'>delete</i>"; */
                    } elseif (isEditor()) {
                     /*   echo "<td><i class='material-icons'>edit</i>"; */
                    }
                }
            }
            ?>
        </table>
    </div>
</body>
<?php require_once 'rodape.php';



$banco->close(); ?>

</html>