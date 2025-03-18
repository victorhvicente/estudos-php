<?php

function toApresent($name, $age){
    // $n = $name;
    // $i = $age;
    if(is_string($name) && is_int($age)){
        echo "Olá meu nome é $name e tenho $age anos de idade :D ";
    }
    else{
        echo "Erro. É necessário uma string e um int.";
    }
}

$idade = 24;
$nome = "Victor Hugo";

toApresent($nome, $idade);
?>