<?php 
if (empty($_SESSION['user'])) {
    echo "<header><a id='LogarId' href='user-login.php'>Entrar</a></header>";
} else {
    echo "<header><h4>Olá ". $_SESSION['nome']."</h4>";
    echo "<a href=user-edit.php id='btnHeaderL'>Meus Dados</a>";
    if (isAdmin()) {
        echo " <a href='user-new.php' id='btnHeaderL'>Cadastrar Pessoa</a>";
    }
    echo "<a href='user-logout.php'  id='btnHeaderL'>Sair</a></header>";    
}

?>