<?php

$nome = $_GET["nome"];
$sexo = $_GET["sexo"];
$idade = $_GET["idade"];

if ($sexo == 'feminino' & $idade >= 25){
    echo "<h2> ACEITA <h2>";
}else{
    echo "<h2> NÃO ACEITA <h2>";
}
?>