<?php 
    $q = "SELECT usuario, nome, senha, tipo FROM usuarios WHERE usuario='" . $_SESSION['user'] . "'";
    $busca = $banco->query($q);
    $reg = $busca->fetch_object();
?>
<h1>Alteração de Dados</h1>
<form action="user-edit.php" method="POST">
    <table>
        <tr><td>Usuário</td><td><input type="text" name="usuario" id="usuario" size="10" maxlength="10" value="<?php echo $reg->usuario ?>" readonly></td></tr>
        <tr><td>Nome</td><td><input type="text" name="nome" id="nome" size="30" maxlength="30" value="<?php echo $reg->nome ?>"></td></tr>
        <tr><td>Tipo</td><td><input type="text" name="tipo" id="tipo" readonly value="<?php echo $reg->tipo ?>"></td></tr>
        <tr><td>Senha</td><td><input type="password" name="senha1" id="senha1" size="10" maxlength="10"></td></tr>
        <tr><td>Confirme a Senha</td><td><input type="password" name="senha2" id="senha2" size="10" maxlength="10"></td></tr>
        <tr><td><input type="submit" value="Salvar"></td></tr>
    </table>    
</form>