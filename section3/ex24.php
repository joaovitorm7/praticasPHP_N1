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
    <a href="ex23.php">Voltar para o exercicio anterior</a> <br>
    <a href="http://localhost/praticasPHP_N1/section3/">Voltar para a página inicial</a><br><br>
    <?php 
        for ($i = 1; $i <= 100; $i++) {
            echo "Procesando item $i...<br>";

            if ($i == 50) {
                echo "<h3>Interropendo processamento!</h3>";
                break;
            }
        }
    ?>

    
</body>
</html>