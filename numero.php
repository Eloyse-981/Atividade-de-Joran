<?php

$n1 = $_GET["n1"];

if ($n1 % 10 == 0){
    echo "<h2> O $n1 é divisível por 10 <h2>";
}elseif ($n1 % 5 == 0){
    echo "<h2> O $n1 é divisível por 5 <h2>";
}elseif ($n1 % 2 == 0){
    echo "<h2> O $n1 é divisível por 2 <h2>";
}else{
    echo "<h2> esse número não é dividido por nenhum deles <h2>";
}


?>