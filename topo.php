<?php 
    echo "<header>";
    if (empty($_SESSION['user'])){ 
        echo "<a href='user-login.php'>Login</a>";
    } else {
        echo "Ola, <strong>" . $_SESSION['nome'] . "</strong> - Função: " . $_SESSION['tipo'] . " | ";
        echo "Meus Dados | ";
        if (is_admin()) {
            echo "Novo usuario | ";
            echo "Novo Jogo | ";
        }
        echo "<a href='user-logout.php'>Sair</a>";
    }
    echo "</header>";
?>