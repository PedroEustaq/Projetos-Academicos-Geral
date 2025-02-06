<h1>Novo Usuario</h1>
<table>
    <form action="user-new.php" method="POST">
    <tr><td><h5>Usuario</h5><input type="text" name="usuario" id=usuario></tr>
    <tr><td><h5>Nome</h5><input type="text" name="nome" id=nome></tr>
    <tr><td><h5>Senha</h5><input type="text" name="senha1" id=senha1></tr>
    <tr><td><h5>Repita a Senha</h5><input type="text" name="senha2" id=senha2></tr>
    <tr><td><h5>Tipo</h5><select name="tipo" id="tipo"><option value="admin">Administrador do Sistema</option>
    <option value="editor">Editor do Sistema</option></select>
    <td><input type="submit" value="Adicionar">
    </form>
</table>