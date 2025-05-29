<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções (void e com retorno, parâmetros e argumentos) e princípio DRY</title>
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
     <a href="ex38.php">Voltar para o exercicio anterior</a> <br>
    <a href="http://localhost/praticasPHP_N1/section4/">Voltar para a página inicial</a><br><br>
    <?php 
        function calcularArea($largura, $comprimento) {
            return $largura * $comprimento;
        }

        echo "Área do terreno: " . calcularArea(10, 20) . " m²<br>";
    ?>

    
</body>
</html>