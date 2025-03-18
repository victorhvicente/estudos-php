<?php

// Primeira string
$frase1 = "Testando explode";

// explode() separa a string usando espaço como divisor
$partes = explode(" ", $frase1);

// Mostra o array resultante da primeira string
echo "Resultado da primeira string: ";
print_r($partes);

echo "<br><br>"; // Pula linha para organizar a saída

// Segunda string com vírgulas
$frase2 = "Carro, Navio, Barco, Bicicleta, Avião";

// explode() agora usa vírgula como divisor
$partes2 = explode(", ", $frase2);

// Mostra o array resultante da segunda string
echo "Resultado da segunda string: ";
print_r($partes2);

echo "<br><br>"; // Mais uma linha pra separar a saída

// Percorre o array da segunda string e imprime cada item em uma linha
echo "Lista de meios de transporte: <br>";
for ($i = 0; $i < count($partes2); $i++) {
    echo trim($partes2[$i]) . "<br>"; // trim() remove espaços extras ao redor das palavras
}

?>

