<?php

$frase = "Cadê o meu Queijo ?";
echo $frase . "<br>";

$result = substr($frase, 12, 6);  //STRING PAI, INDICE INICIAL, COMPRIMENTO DA PALAVRA
echo $result;  // Saída: "Queijo ?"


?>