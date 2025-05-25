<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estruturas Condicionais(if, else, switch)</title>
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
    <a href="ex11.php">Voltar para o exercicio anterior</a> <br>
     <a href="http://localhost/praticasPHP_N1/section2/">Voltar para a página inicial</a>
    <?php 
        $temperatura = 5;

        if($temperatura > 0) {
            echo "<h3>Temperatura Positiva</h3>";
        } else if($temperatura < 0) {
            echo "<h3>Temperatura Negativa</h3>";
        } else {
            echo "<h3>Temperatura Igual a 0</h3>";
        }
    ?>

    
</body>
</html>