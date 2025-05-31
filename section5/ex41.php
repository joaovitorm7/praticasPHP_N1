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
    <a href="http://localhost/praticasPHP_N1/section5/">Voltar para a página inicial</a><br><br>

    <h1>Bem-vindo à <?php echo $titulo; ?></h1>

    
</body>
</html>