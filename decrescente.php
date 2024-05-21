<?php

$n1 = $_GET["n1"];
$n2 = $_GET["n2"];
$n3 = $_GET["n3"];

if ($n1 > $n2 & $n3){
    echo "<h2> A ordem é $n1, $n2, $n3 <h2>";
}elseif($n2 > $n1 & $n3){
    echo "<h2> A ordem é $n2, $n1, $n3 <h2>";
}elseif($n3 > $n2 & $n1){
    echo "<h2> A ordem é $n3, $n2, $n1 <h2>";
}


?>