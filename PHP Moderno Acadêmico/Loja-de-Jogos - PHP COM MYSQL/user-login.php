<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Anton+SC&family=Inter:opsz@14..32&family=Karla&family=Roboto:ital,wght@0,100..900;1,100..900&family=VT323&display=swap');
    </style>
    <style>
        div#corpo {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 200px;
            width: 250px;
        }
        input {
            margin: 5px;
            padding: 5px;
        }
    </style>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <?php
    $u = $_POST['usuario'] ?? null;
    $s = $_POST['senha'] ?? null;
    require_once "includes/banco.php";
    require_once "includes/login.php";
    require_once "includes/funcoes.php";
    ?>
    <div id="corpo">
        <?php

        

        if (is_null($u) || is_null($s)) {
            require_once "user-login-form.php";
        } else {
            $q = "SELECT usuario, nome, senha, tipo FROM usuario WHERE usuario = '$u'";
            $busc = $banco->query($q);
            if ($busc && $busc->num_rows > 0) { // Se encontrou o usuário
                $reg = $busc->fetch_object();
                if (testarHesh($u,$reg->senha)) { // Se a senha estiver correta
                    echo msg_sucesso("Deu certin");
            
                    $_SESSION['user'] = $reg->usuario;
                    $_SESSION['nome'] = $reg->nome;
                    $_SESSION['tipo'] = $reg->tipo;
                } else {
                    echo msg_erro("Opa... deu errado"); // Senha incorreta
                }
            } else {
                echo msg_erro("Opa... deu errado"); // Usuário não encontrado
            }
        }
        ?>
    </div>
</body>

</html>