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
    <a href="ex21.php">Voltar para o exercicio anterior</a> <br>
    <a href="http://localhost/praticasPHP_N1/section3/">Voltar para a página inicial</a>
    <?php 
        echo "<h3>Lista de Indificadores de Produtos</h3>";

        for ($i = 2; $i <= 20; $i++) {
            if($i % 2 == 0){
                echo "<h3>Produto ID: $i</h3>";
            }
        }
    ?>

    
</body>
</html>