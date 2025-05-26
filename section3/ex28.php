<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estruturas de Repetição (for, while, do..while)</title>
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
    <a href="ex27.php">Voltar para o exercicio anterior</a> <br>
    <a href="http://localhost/praticasPHP_N1/section3/">Voltar para a página inicial</a><br><br>
    <?php 
        $total = 0;

        for ($i = 1; $i <= 100; $i++) {
            $venda = rand(5000, 500000) / 100;
            echo "Venda do dia $i: R$ " . number_format($venda, 2, ',', '.') . "<br>";
            $total += $venda;
        }

        echo "<h3>Total de vendas: R$ " . number_format($total, 2, ',', '.') . "</h3>";
    ?>

    
</body>
</html>