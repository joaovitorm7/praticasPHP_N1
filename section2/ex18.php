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
    <a href="ex17.php">Voltar para o exercicio anterior</a> <br>
     <a href="http://localhost/praticasPHP_N1/section2/">Voltar para a página inicial</a>
    <?php 
        $cor = "Vermelho";

        switch ($cor) {
            case "Vermelho":
                echo "<h3>Cor selecionada: Vermelho</h3>";
                break;
            case "Azul":
                echo "<h3>Cor selecionada: Azul</h3>";
                break;
            case "Verde":
                echo "<h3>Cor selecionada: Verde</h3>";
                break;
            case "":
                echo "<h3>Nenhuma cor selecionada, por padrão selecionamos a cor</h3>";
            default:
                echo "<h3>Cor não reconhecida!</h3>";
        }
        
    ?>

    
</body>
</html>