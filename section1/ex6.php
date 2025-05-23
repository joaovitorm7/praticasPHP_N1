<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variavies e Tipos de Dados</title>
</head>
<body>
    <a href="ex5.php">Voltar para o exercicio anterior</a> <br>
    <a href="http://localhost/praticasPHP_N1/section1/">Voltar para a página inicial</a>
    <?php
        $custoMaterial = 1000;
        $custoMaoDeObra = 500;

        $custoTotal = $custoMaterial + $custoMaoDeObra;

        echo "<h3> O Valor dos materias foram: $custoMaterial</h3>";
        echo "<h3> O Valor da mão de obra foi: $custoMaoDeObra</h3>";
        echo "<h3> O Valor total das desepas foram: $custoTotal</h3>";
    ?>
    
</body>
</html>