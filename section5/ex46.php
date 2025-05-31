<?php $titulo = "Minha Página Dinâmica"; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo; ?></title>
</head>
<style>
    body {
        text-align: center;
    }
    a {
        text-decoration: none;
    }
    a:hover {
        text-decoration: underline;
    }
</style>
<body>
    <a href="ex45.php">Voltar para o exercicio anterior</a> <br>
    <a href="http://localhost/praticasPHP_N1/section5/">Voltar para a página inicial</a><br><br>

    <?php
        include 'config.php';   // Se não achar, emite um aviso e continua
        require 'config.php';   // Se não achar, FATAL ERROR e para tudo
    ?>

    

</body>
</html>