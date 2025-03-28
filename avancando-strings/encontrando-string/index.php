<?php

$frase = "O pato pintou a porta do prédio de prata.";

$palavraEncontrada = strpos($frase, "porta");

echo $palavraEncontrada . "<br>";

if(strpos($frase, "porta") === false){
    echo "Palavra não encontrada.";
}
else{
    echo "Palavrra encontrada";
}

?>