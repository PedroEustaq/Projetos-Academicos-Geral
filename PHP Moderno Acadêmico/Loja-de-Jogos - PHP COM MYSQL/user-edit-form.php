<?php 

$q = "SELECT usuario, nome, senha, tipo FROM usuario WHERE usuario = '". $_SESSION['user']. "'";
$busca = $banco->query($q);
$reg = $busca->fetch_object();

?>

<h1>Alterar Dados</h1>
<form action='user-edit.php' method='post'>
<table id="tableedit">
    <tr><td> <h5>Usuario</h5>
        <td> <input type='text' name='usuario' id='usuario' value="<?php echo $reg->usuario?>" >
        <tr><td> <h5>Nome</h5>
            <td><input type='text' name='nome' id='nome' value="<?php echo $reg->nome?>">
            <tr><td> <h5>Tipo</h5>
            <td><input type='text' name='tipo' id='tipo' readonly value="<?php echo $reg->tipo?>">
            <tr><td> <h5>Senha</h5>
            <td><input type='text' name='senha1' id='senha1' >
            <tr><td> <h5>Confirme Senha</h5>
            <td><input type='text' name='senha2' id='senha2' >
            <input type='submit' value='Salvar'>
</table>

</form>