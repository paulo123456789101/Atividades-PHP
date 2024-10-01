<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada de Multiplicação</title>
</head>
<body>

<h1>Gerar Tabuada de Multiplicação</h1>

<form method="POST" action="">
    <label for="numero">Digite um número:</label>
    <input type="number" name="numero" id="numero" required>
    <br><br>
    <input type="submit" value="Gerar Tabuada">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $numero = $_POST["numero"];

    echo "<h2>Tabuada do número $numero</h2>";

    // loop for para gerar a tabuada de 1 a 10
    echo "<ul>";
    for ($i = 1; $i <= 10; $i++) {
        $resultado = $numero * $i;
        echo "<li>$numero x $i = $resultado</li>";
    }
    echo "</ul>";
}
?>

</body>
</html>
