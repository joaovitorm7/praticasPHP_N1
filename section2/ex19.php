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
    <a href="ex18.php">Voltar para o exercicio anterior</a> <br>
     <a href="http://localhost/praticasPHP_N1/section2/">Voltar para a página inicial</a>
    <?php 
        $cargo = "Desenvolvedor";

        $salario = 0;

        if ($cargo == "Desenvolvedor") {
            $salario = 3000;
        } else if ($cargo == "Designer") {
            $salario = 2500;
        } else if ($cargo == "Gerente") {
            $salario = 5000;
        } else {
            echo "<h3>Cargo não encontrado!</h3>";
            exit();
        }

        echo "<h3>O salário do cargo de $cargo é R$ $salario</h3>";
    ?>

    
</body>
</html>