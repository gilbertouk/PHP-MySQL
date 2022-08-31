<h1>Novo usuário</h1>
<form action="user-new.php" method="POST">
    <table>
        <tr><td>Usuário:</td><td><input type="text" name="usuario" id="usuario" size="10" maxlength="10"></td></tr>
        <tr><td>Nome:</td><td><input type="text" name="nome" id="nome" size="30" maxlength="30"></td></tr>
        <tr><td>Tipo:</td><td><select name="tipo" id="tipo">
            <option value="admin">Administrador do Sistema</option>
            <option value="editor" selected>Editor Autorizado</option>
        </select></td></tr>
        <tr><td>Senha:</td><td><input type="password" name="senha1" id="senha1" max="10" maxlength="10"></td></tr>
        <tr><td>Confirme a Senha</td><td><input type="password" name="senha2" id="senha2" max="10" maxlength="10"></td></tr>
        <tr><td><input type="submit" value="Salvar"></td></tr>
    </table>
</form>
                