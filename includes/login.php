<?php
    function gerarHash($senha){
        $hash = password_hash($senha, PASSWORD_DEFAULT);
        return $hash;
    }

    function testarHash($senha, $hash){
        $ok = password_verify($senha, $hash);
        return $ok;
    }

    if (testarHash('123456', '$2y$10$T/TPMRZr1k2/lG.lih3MnODIIJnh0gQ6IAQsSkPyOo56r5.VY77YW')){
        echo "Senha confere";
    } else {
        echo "Senha nao confere";
    }
?>