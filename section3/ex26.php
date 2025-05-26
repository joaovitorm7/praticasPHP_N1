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
    <a href="ex25.php">Voltar para o exercicio anterior</a> <br>
    <a href="http://localhost/praticasPHP_N1/section3/">Voltar para a página inicial</a><br><br>
    <?php 
        echo "<h3>Programa iniciado...</h3>";
        
        $entradas = [5, 12, 8, 3, 0, 9, 7];
        $indice = 0;

        do {
            $entrada = $entradas[$indice];
            echo "Você digitou: $entrada<br>";
            $indice++; 
        } while ($entrada != 0);
    ?>

    
</body>
</html>