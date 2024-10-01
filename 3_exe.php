<?php
    $idade = 25;
    $altura = 1.75; 
    $frutasFavoritas = array("Maçã", "Banana", "Morango"); 
    echo "<h1>Informações Pessoais</h1>";
    echo "<p><strong>Nome:</strong> $nome</p>";
    echo "<p><strong>Idade:</strong> $idade anos</p>";
    echo "<p><strong>Altura:</strong> $altura metros</p>";
    echo "<h2>Frutas Favoritas:</h2>";
    echo "<ul>";
    foreach ($frutasFavoritas as $fruta) {
        echo "<li>$fruta</li>";
    }
    echo "</ul>";
?>
