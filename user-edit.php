<!DOCTYPE html>
    <?php 
        require_once "includes/banco.php";
        require_once "includes/login.php";
        require_once "includes/funcoes.php";
    ?>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="estilos/estilo.css" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <title>Edição de Dados do Usuário</title>
    </head>
    <body>
        <div id="corpo">
            <?php
                if(!is_logado()){
                    echo msg_erro(" Efetue <a href='user-login.php'>login</a> para editar seus dados!");
                } else {
                    if(!isset($_POST['usuario'])){
                        include "user-edit-form.php";
                    } else {
                        echo msg_sucesso(" Dados foram recebidos!");
                    }
                }
            echo voltar();
            ?>
        </div>
        <?php require_once "rodape.php" ?>
    </body>
</html>