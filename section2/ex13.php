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
    <a href="ex12.php">Voltar para o exercicio anterior</a> <br>
     <a href="http://localhost/praticasPHP_N1/section2/">Voltar para a página inicial</a>
    <?php 
        $nota1 = 8;
        $nota2 = 8;
        $media = ($nota1 + $nota2) / 2;

        if ($media >= 7) {
            echo "<h3>Aprovado</h3>";
        } else if ($media >= 5 and $media < 7) {
            echo "<h3>Recuperação</h3>";
        } else {
            echo "<h3>Reprovado</h3>";
        }
    ?>

    
</body>
</html>