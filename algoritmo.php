<?php
    
    $n1 = $_GET['n1'];
    $n2 = $_GET['n2'];

    $soma = ($n1 + $n2);

    if ($soma > 20) {
        ($valor = $soma + 8);
        echo "<h2> sua soma é $valor <h2>";
    }elseif($soma <= 20) {
        ($valor = $soma - 5);
        echo "<h2> sua soma é $valor <h2>";
    }
?>