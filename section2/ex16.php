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
    <a href="ex15.php">Voltar para o exercicio anterior</a> <br>
     <a href="http://localhost/praticasPHP_N1/section2/">Voltar para a página inicial</a>
    <?php 
        $estadoCivil =  "C";

        switch ($estadoCivil) {
            case "C":
                echo "<h3>Você é Casado(a)</h3>";
                break;
            case "S":
                echo "<h3>Você é Solteiro(a)</h3>";
                break;
            case "D":
                echo "<h3>Você é Divorciado(a)</h3>";
                break;
            case "O":
                echo "<h3>Outro</h3>";
                break;
            default:
                echo "<h3>Estado civil inválido!</h3>";
                break;
        }
        
    ?>

    
</body>
</html>