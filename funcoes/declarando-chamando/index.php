<?php

function somar(){
    $x = 10;
    $y = 20;

    $result = $x + $y;

    echo "Resultado da soma: " . $result;
}

function fullName() {
    $firstName = "Victor Hugo";
    $lastName = "Vicente";

    $fullName = "$firstName $lastName";

    echo "Nome completo: $fullName";
}

somar();
echo "<br>";
fullName();


?>