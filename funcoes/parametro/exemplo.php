<?php

function multiplicar($numberOne, $numberTwo, $numberThree){
    if(is_int($numberOne) && is_int($numberTwo) && is_int($numberThree)){
        echo "São números inteiros.";
        return $numberOne * $numberTwo * $numberThree;
    }
    else{
        echo "Erro.";
    }
}

$n1 = 10;
$n2 = 10;
$n3 = 10;

$result = multiplicar($n1, $n2, $n3);
echo "<br>";
echo "Resultado da multipliação entre os números inteiros: $result";