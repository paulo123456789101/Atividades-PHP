<?php
    $nomes = array("João", "Maria", "Carlos", "Ana", "Pedro");
    echo "<h1>Lista de Nomes</h1>";
    echo "<ul>"; 
    foreach ($nomes as $nome) {
        echo "<li>$nome</li>";
    }
    echo "</ul>";
?>
