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
    <a href="ex16.php">Voltar para o exercicio anterior</a> <br>
     <a href="http://localhost/praticasPHP_N1/section2/">Voltar para a página inicial</a>
    <?php 
        $alertaClimatico = 20;

        if ($alertaClimatico < 0) {
            echo "<h3>Alerta de Gelo!</h3>";
        } else if ($alertaClimatico >= 0 and $alertaClimatico <= 15) {
            echo "<h3>Clima Ameno!</h3>";
        } else if ($alertaClimatico > 15 and $alertaClimatico <= 25) {
            echo "<h3>Clima Agradável!</h3>";
        } else if ($alertaClimatico > 25) {
            echo "<h3>Atenção: Calor Extremo!</h3>";
        } else {
            echo "<h3>Alerta Climático Inválido!</h3>";
        }

        
    ?>

    
</body>
</html>