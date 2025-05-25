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
    <a href="ex14.php">Voltar para o exercicio anterior</a> <br>
     <a href="http://localhost/praticasPHP_N1/section2/">Voltar para a página inicial</a>
    <?php 
        $bedida = "Suco";

        if ($bedida == "Café") {
            echo "<h3>Você escolheu $bedida</h3>";
        } elseif ($bedida == "Chá") {
            echo "<h3>Você escolheu $bedida</h3>";
        } elseif ($bedida == "Suco") {
            echo "<h3>Você escolheu $bedida</h3>";
        } else {
            echo "<h3>Bebida não reconhecida!</h3>";
        }
        
    ?>

    
</body>
</html>