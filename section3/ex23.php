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
    <a href="ex22.php">Voltar para o exercicio anterior</a> <br>
    <a href="http://localhost/praticasPHP_N1/section3/">Voltar para a página inicial</a>
    <?php 
        echo "<h3>Preparando para o lançamento...</h3>";

        for ($i = 5; $i > 0; $i--) {
            echo "Faltam $i segundos para o lançamento!<br>";
        }

        echo "<h3>Lançado!!!</h3>";
    ?>

    
</body>
</html>