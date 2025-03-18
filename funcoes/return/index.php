<?php

function somar($n1, $n2){
    return $n1 + $n2;
}

function subtrair($n1, $n2){
    return $n1 - $n2;
}

function multiplicar($n1, $n2){
    return $n1 * $n2;
}

$somarResult = somar(10, 20);
$subtrairResult = subtrair(15, 2);
$multiplicarResult = multiplicar($somarResult, $subtrairResult);

echo "Resultado: $multiplicarResult";

?>