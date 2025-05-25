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
    <a href="ex13.php">Voltar para o exercicio anterior</a> <br>
     <a href="http://localhost/praticasPHP_N1/section2/">Voltar para a página inicial</a>
    <?php 
        $diaSemana = 1;  

        switch ($diaSemana) {
            case 1:
                echo "<h3>Hoje é Domingo</h3>";
                break;
            case 2:
                echo "<h3>Hoje é Segunda-feira</h3>";
                break;
            case 3:
                echo "<h3>Hoje é Terça-feira</h3>";
                break;
            case 4:
                echo "<h3>Hoje é Quarta-feira</h3>";
                break;
            case 5:
                echo "<h3>Hoje é Quinta-feira</h3>";
                break;
            case 6:
                echo "<h3>Hoje é Sexta-feira</h3>";
                break;
            case 7:
                echo "<h3>Hoje é Sábado</h3>";
                break;
            default:
                echo "Dia inválido!";
                break;
        }
    ?>

    
</body>
</html>