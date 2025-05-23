<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variavies e Tipos de Dados</title>
</head>
<body>
    <a href="ex2.php">Voltar para o exercicio anterior</a> <br>
    <a href="http://localhost/praticasPHP_N1/section1/">Voltar para a página inicial</a>
    <?php
        $largura = 10.5; 
        $comprimento = 20.3; 

        $area = $largura * $comprimento;

        echo "<h3> A área do terreno é de " . number_format($area, 2, ',', '.') . " metros quadrados.</h3>";
    ?>

    
</body>
</html>