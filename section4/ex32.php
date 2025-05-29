<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Calculadora Simples</title>
    <style>
        body {
            background: #f0f0f0;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .calculadora {
            background: #222;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.5);
            width: 300px;
            color: #fff;
        }
        .display {
            background: #000;
            color: #0f0;
            padding: 10px;
            font-size: 24px;
            text-align: right;
            margin-bottom: 10px;
            border-radius: 5px;
            min-height: 30px;
        }
        input[type="number"] {
            width: 90%;
            padding: 10px;
            margin: 5px 0;
            border-radius: 5px;
            border: none;
            font-size: 16px;
        }
        input[type="submit"] {
            width: 96%;
            padding: 10px;
            background: #0f0;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            margin-top: 10px;
        }
        input[type="submit"]:hover {
            background: #0c0;
        }
    </style>
</head>
<body>

<div class="calculadora">
    <h2>Calculadora de Soma</h2>

    <?php
    $resultado = '';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST['num1'] ?? 0;
        $num2 = $_POST['num2'] ?? 0;
        $resultado = $num1 + $num2;
    }
    ?>

    <div class="display">
        <?php 
        if($resultado !== '') {
            echo "Resultado: $resultado";
        } else {
            echo "0";
        }
        ?>
    </div>

    <form method="post">
        <label>Número 1:</label>
        <input type="number" name="num1" required>

        <label>Número 2:</label>
        <input type="number" name="num2" required>

        <input type="submit" value="Somar">
    </form>
</div>

</body>
</html>
