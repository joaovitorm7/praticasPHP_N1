<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variavies e Tipos de Dados</title>
</head>
<body>
    <a href="ex8.php">Voltar para o exercicio anterior</a> <br>
    <a href="http://localhost/praticasPHP_N1/section1/">Voltar para a página inicial</a>
    <?php
       define ("PI","3.1415926535");
       
       echo "<h3>Valor de PI com 4 casas decimais é: " . number_format(PI, 4)."</h3>";
    ?>
    
</body>
</html>