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
    <a href="ex42.php">Voltar para o exercicio anterior</a> <br>
    <a href="http://localhost/praticasPHP_N1/section5/">Voltar para a página inicial</a><br><br>

    <?php  include 'cabecalho.php' ?>
    <?php  include 'navegacao.php' ?>
    
    <h1>Página Principal!</h1>

    <?php  include 'rodape.php' ?>

</body>
</html>