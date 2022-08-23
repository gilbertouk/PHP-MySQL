<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Titulo da Pagina</title>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="estilos/estilo.css" />
</head>
<body>
    <?php
        require_once "includes/banco.php";
        require_once "includes/funcoes.php";
    ?>
    <div id="corpo">
        <?php 
            $c = $_GET['cod'] ?? 0;
            $busca = $banco->query("select * from jogos where cod='$c'");
        ?>
        <h1>Detalhes do jogo</h1>
        <table class='detalhes'>
            <?php
                if (!$busca) {
                    echo "<tr><td>Busca falhou! $banco->error";
                } else {
                    if ($busca->num_rows == 1) {
                        $reg = $busca->fetch_object();
                        $t = thumb($reg->capa);
                        echo "<tr><td rowspan='3'><img src='$t' class='full' />";
                        echo "<td><h2>$reg->nome</h2>";
                        echo "Nota: " . number_format($reg->nota , 1) . "/10.0";
                        echo "<tr><td class='descricao'>$reg->descricao";
                        echo "<tr><td>Adm";
                    } else {
                        echo "<tr><td>Nenhum registro encontrado!";
                    }
                }
            ?>
        </table>  
        <a href="index.php"><img src="icones/icoback.png" class='icoback' /></a>
    </div>
</body>
</html>