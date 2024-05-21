<?php

$l1 = $_GET["l1"];
$l2 = $_GET["l2"];
$l3 = $_GET["l3"];

if ($l1 == $l2 && $l2 == $l3){
    echo "<h2> É um triângulo equilátero <h2>";
}elseif($l1 != $l2 && $l2 != $l3){
    echo "<h2> É um triângulo escaleno <h2>";
}else{
    echo "<h2> É um triângulo isóceles <h2>";
}


?>