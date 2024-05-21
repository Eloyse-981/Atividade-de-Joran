<?php
function obterNomeDoMes($numero) {
    switch ($numero) {
        case 1:
            return "Janeiro";
        case 2:
            return "Fevereiro";
        case 3:
            return "Março";
        case 4:
            return "Abril";
        case 5:
            return "Maio";
        case 6:
            return "Junho";
        case 7:
            return "Julho";
        case 8:
            return "Agosto";
        case 9:
            return "Setembro";
        case 10:
            return "Outubro";
        case 11:
            return "Novembro";
        case 12:
            return "Dezembro";
        default:
            return false;
    }
}

$numero = $_GET["numero"];

$nomeMes = obterNomeDoMes($numero);

if ($nomeMes) {
    echo "O mês correspondente ao número $numero é: $nomeMes";
} else {
    echo "Não existe mês correspondente ao número $numero.";
}
?>
