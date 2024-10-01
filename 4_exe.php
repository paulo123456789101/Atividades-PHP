<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora PHP</title>
</head>
<body>

<h1>Calculadora Simples</h1>

<form method="POST" action="">
    <label for="numero1">Número 1:</label>
    <input type="number" step="any" name="numero1" id="numero1" required>
    <br><br>

    <label for="numero2">Número 2:</label>
    <input type="number" step="any" name="numero2" id="numero2" required>
    <br><br>

    <label for="operacao">Escolha a Operação:</label>
    <select name="operacao" id="operacao" required>
        <option value="+">Somar (+)</option>
        <option value="-">Subtrair (-)</option>
        <option value="*">Multiplicar (*)</option>
        <option value="/">Dividir (/)</option>
    </select>
    <br><br>

    <input type="submit" value="Calcular">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebendo os valores do formulário
    $numero1 = $_POST["numero1"];
    $numero2 = $_POST["numero2"];
    $operacao = $_POST["operacao"];

    // Usando switch para realizar a operação
    switch ($operacao) {
        case '+':
            $resultado = $numero1 + $numero2;
            echo "<p><strong>Resultado:</strong> $numero1 + $numero2 = $resultado</p>";
            break;
        case '-':
            $resultado = $numero1 - $numero2;
            echo "<p><strong>Resultado:</strong> $numero1 - $numero2 = $resultado</p>";
            break;
        case '*':
            $resultado = $numero1 * $numero2;
            echo "<p><strong>Resultado:</strong> $numero1 * $numero2 = $resultado</p>";
            break;
        case '/':
            if ($numero2 != 0) {
                $resultado = $numero1 / $numero2;
                echo "<p><strong>Resultado:</strong> $numero1 / $numero2 = $resultado</p>";
            } else {
                echo "<p><strong>Erro:</strong> Divisão por zero não é permitida!</p>";
            }
            break;
        default:
            echo "<p><strong>Erro:</strong> Operação inválida!</p>";
            break;
    }
}
?>

</body>
</html>
