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
    <a href="ex19.php">Voltar para o exercicio anterior</a> <br>
     <a href="http://localhost/praticasPHP_N1/section2/">Voltar para a página inicial</a>
    <?php 
        $usuarioAtivo = true;
        $usuarioAdmin = True;

        if ($usuarioAtivo && $usuarioAdmin) {
            echo "<h3>Acesso total concedido!</h3>";
        } else {
            echo "<h3>Acesso Negado!</h3>";
        }
    ?>

    
</body>
</html>