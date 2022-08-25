<?php 
    echo "<header>";
    if (empty($_SESSION['user'])){ 
        echo "<a href='user-login.php'>Login</a>";
    } else {
        echo "Ola, <strong>" . $_SESSION['nome'] . "</strong> - Função: " . $_SESSION['tipo'] . " | ";
        echo "<a href='user-logout.php'>Sair</a>";
    }
    echo "</header>";
?>