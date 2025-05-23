<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variavies e Tipos de Dados</title>
</head>
<body>
    <a href="ex9.php">Voltar para o exercicio anterior</a> <br>
    <a href="http://localhost/praticasPHP_N1/section1/">Voltar para a página inicial</a>
    <?php
        $paragrafo = "Este é um parágrafo de exemplo para demonstrar como contar caracteres em PHP usando uma função nativa.";

        $string = "";
        strlen($string);
        $quantidadeCaracteres = strlen($paragrafo);

        echo "<h1> Quantidade de caracteres é: " . $quantidadeCaracteres."</h1>";

    ?>
    
</body>
</html>