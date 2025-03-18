<?php

$str1 = "O Rato roeu a roupa do rei de Roma";
// strlen() retorna o comprimento da string, ou seja, quantos caracteres ela possui (incluindo espaços e acentos).

echo strlen($str1) . "<br>"; 

//percorrendo a string com a função strlen

$qtdA = 0;
for($i = 0; $i < strlen($str1); $i++){

    if($str1[$i] === "a"){
        echo "$str1[$i] . <br>";
        $qtdA++;
    }
}

echo "Quantidade de letras a na frase: {$qtdA}";

?>
