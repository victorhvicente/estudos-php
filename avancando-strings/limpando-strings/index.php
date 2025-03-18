<?php

// Define a string com espaços extras
$frase = "     Olá,      Victor!    Tudo bom ?";

// Salva a frase original no banco de dados (mantém os espaços)
$fraseParaBanco = $frase;

// Exibe a frase no HTML sem espaços no início e no fim
// trim() tira só os espaços das pontas, mas deixa o conteúdo do meio intacto
echo "<p>" . htmlspecialchars(trim($frase)) . "</p>";

// Exibe o que vai para o banco (com espaços intactos)
echo "<p>Frase para o banco de dados: '" . htmlspecialchars($fraseParaBanco) . "'</p>";

?>

