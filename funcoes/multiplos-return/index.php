<?php 

// function about($nome, $idade, $profissão){
//     $n = $nome;
//     $i = $idade;
//     $p = $profissão;

//     return[$n, $i, $p];
// }

// $sobre = about("Victor", 24, "Programador");
// echo "Olá, eu sou $sobre[0] tenho $sobre[1] anos de idade e sou um $sobre[2].";
// echo "<br>";

// print_r($sobre);

// echo "<br>";

// var_dump($sobre); // Mais indicado para leitura de um aray

function about($nome, $idade, $profissao) {
    // Retorna um array associativo para facilitar a leitura
    return [
        "nome" => $nome,
        "idade" => $idade,
        "profissao" => $profissao
    ];
}

// Chamando a função
$sobre = about("Victor", 24, "Programador");

// Usando chaves pra acessar o array associativo
echo "Olá, eu sou {$sobre['nome']}, tenho {$sobre['idade']} anos de idade e sou um {$sobre['profissao']}.";
echo "<br>";

// Debug com print_r e var_dump
print_r($sobre);
echo "<br>";
var_dump($sobre);

?>
