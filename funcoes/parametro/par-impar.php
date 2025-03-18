<?php

// function parImpar($numero){
//     if(is_int($numero)){
//         if($numero % 2 == 0){
//             echo "PAR <br>";
//         }
//         else{
//             echo "ÍMPAR <br>";
//         }
//     }
//     else{
//         echo "Erro. Necessário um inteiro. <br>";
//     }
// }

function parImpar($numero) {
    if (!is_int($numero)) {
        echo " Erro: Necessário um número inteiro. <br>";
        return;
    }

    echo ($numero % 2 === 0) ? "$numero é PAR <br>" : "$numero é ÍMPAR <br>";
}

parImpar(10);
parImpar(7);
parImpar(250);
parImpar(12.5);

?>