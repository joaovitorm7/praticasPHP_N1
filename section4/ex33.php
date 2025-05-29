<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções (void e com retorno, parâmetros e argumentos) e princípio DRY</title>
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
     <a href="ex32.php">Voltar para o exercicio anterior</a> <br>
    <a href="http://localhost/praticasPHP_N1/section4/">Voltar para a página inicial</a><br><br>
    <?php 
        function calcularCustoTotal($precoUnitario, $quantidade) {
            $custoTotal = $precoUnitario * $quantidade;
            return $custoTotal;
        }

        $precoUnitario = 10;
        $quantidade = 5;
        $custoTotal = calcularCustoTotal($precoUnitario, $quantidade);
        echo "<h3>Custo Total: $custoTotal</h3>";
    ?>

    
</body>
</html>