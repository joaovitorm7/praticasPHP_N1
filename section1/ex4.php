<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variavies e Tipos de Dados</title>
</head>
<body>
    <a href="ex3.php">Voltar para o exercicio anterior</a> <br>
    <a href="http://localhost/praticasPHP_N1/section1/">Voltar para a página inicial</a>
    <?php
        $statusPedido = true;

        if ($statusPedido) {
            echo "<h3> Pedido confirmado</h3>.";
        } else {
            echo "<h3> Pedido não confirmado </h3>.";
        }
    ?>

    
</body>
</html>