<?php
    echo "<footer>";
    echo "<p>Acessado por " . $_SERVER['REMOTE_ADDR'] . " em " . date('d/m/y') . "</p>";
    echo "Desenvolvido por Gilberto Antonio &copy; 2022</p>";
    echo "</footer>";
    $banco->close();
?>