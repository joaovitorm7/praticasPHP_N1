<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Tabuadas de 1 a 5</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f0f0;
            padding: 20px;
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }
        .links {
            width: 100%;
            text-align: center;
            margin-bottom: 20px;
        }
        table {
            border-collapse: collapse;
            width: 150px;
            background: white;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 8px;
            overflow: hidden;
        }
        caption {
            font-weight: bold;
            padding: 10px;
            background: #4CAF50;
            color: white;
        }
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        tr:nth-child(even) {
            background: #f9f9f9;
        }
    </style>
</head>
<body>
    <div class="links">
        <a href="ex29.php">Voltar para o exercicio anterior</a> <br>
        <a href="http://localhost/praticasPHP_N1/section3/">Voltar para a página inicial</a><br><br>
    </div>

<?php
    for ($tabuada = 1; $tabuada <= 5; $tabuada++) {
        echo "<table>";
        echo "<caption>Tabuada do $tabuada</caption>";
        for ($i = 1; $i <= 10; $i++) {
            $resultado = $tabuada * $i;
            echo "<tr><td>$tabuada x $i = $resultado</td></tr>";
        }
        echo "</table>";
    }
?>

</body>
</html>
