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
     <a href="ex33.php">Voltar para o exercicio anterior</a> <br>
    <a href="http://localhost/praticasPHP_N1/section4/">Voltar para a página inicial</a><br><br>
    <?php 
        function calcularMedia($notas) {
            $soma = array_sum($notas);
            $quantidade = count($notas);
            return $soma / $quantidade;
        }

        $notas = [8, 9.5, 7, 5];
        echo "<h3>Média: </h3>".calcularMedia($notas);
    ?>

    
</body>
</html>