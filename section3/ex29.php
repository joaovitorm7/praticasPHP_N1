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
    <a href="ex28.php">Voltar para o exercicio anterior</a> <br>
    <a href="http://localhost/praticasPHP_N1/section3/">Voltar para a página inicial</a><br><br>
    <?php 
        $quantidadeProduzida = 0;
        $registroProducao = [];

        while ($quantidadeProduzida < 5) {
            $quantidadeProduzida++;
            $registroProducao[] = $quantidadeProduzida;
            echo "<h3>Quantidade Atual = $quantidadeProduzida<br></h3>";
        }

        echo "<h3>Resumo da Produzação: <br></h3>";
        foreach ($registroProducao as $quantidade) {
            echo "Quantidade produzido: $quantidade <br>";
        }
    ?>

    
</body>
</html>