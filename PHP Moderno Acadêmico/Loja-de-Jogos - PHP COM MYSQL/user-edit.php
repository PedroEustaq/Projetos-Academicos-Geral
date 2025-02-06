<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>???</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Anton+SC&family=Inter:opsz@14..32&family=Karla&family=Roboto:ital,wght@0,100..900;1,100..900&family=VT323&display=swap');
    </style>
</head>
<body>
<?php 
    require_once "includes/banco.php";
    require_once "topo.php";
    require_once "includes/login.php";
    require_once "includes/funcoes.php";
    ?>
    <div id="corpo">
        <?php 
        
        $u = $_POST['usuario'] ?? null;
        $n = $_POST['nome'] ?? null;
        $t = $_POST['tipo'] ?? null;
        $s1 = $_POST['senha1'] ?? null;
        $s2 = $_POST['senha2'] ?? null;

        if(!isLogado()) {
            echo msg_erro("Eita! essa area é restrita");
        } else {
            if (!isset($_POST['usuario'])) {
                include 'user-edit-form.php';
            } else {
                if ($_POST['senha1'] == $_POST['senha2']) {
                    echo msg_aviso("Usuario $n cadastrado com sucesso! Por segurança efetue o login novamente");
                    $GH = gerarHesh($s1);
                    $q = "UPDATE usuario SET usuario = '$u',
                        nome = '$n',
                        senha = '$GH'
                        WHERE usuario = '$u'";
                    $busca = $banco->query($q);
                    logout();
                } else {
                    echo msg_erro("As senhas não coincidem");
                }
        }
    }
        
        ?>    


</div>
</body>
</html>