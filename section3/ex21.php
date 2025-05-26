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
     <a href="http://localhost/praticasPHP_N1/section3/">Voltar para a página inicial</a>
    <?php 
        echo "<h3>Iniciando a Contagem...</h3>";

        for ($i = 1; $i <=10; $i++) {
            echo "<h3>$i</h3>";
        }

        echo "<h3>Contagem Finalizada!</h3>";
    ?>

    
</body>
</html>