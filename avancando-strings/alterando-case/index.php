<?php

$frase = "Olá, ViCtoR! TUDo bem COM voCÊ?";

// strtolower() - Converte toda a string para minúsculas
$minuscula = strtolower($frase,);
echo "Minúsculas: $minuscula<br>";  
// Saída: olá, victor! tudo bom?

// strtoupper() - Converte toda a string para maiúsculas
$maiuscula = strtoupper($frase);
echo "Maiúsculas: $maiuscula<br>";  
// Saída: OLÁ, VICTOR! TUDO BOM?

// ucfirst() - Converte só a primeira letra da string para maiúscula
$primeiraMaiuscula = ucfirst(strtolower($frase)); // uso strtolower() antes pra garantir o resto em minúsculas
echo "Primeira letra maiúscula: $primeiraMaiuscula<br>";  
// Saída: Olá, victor! tudo bom?

// ucwords() - Converte a primeira letra de cada palavra para maiúscula
$cadaPalavraMaiuscula = ucwords(strtolower($frase)); // também garanto o resto em minúsculas antes
echo "Cada palavra com maiúscula: $cadaPalavraMaiuscula<br>";  
// Saída: Olá, Victor! Tudo Bom?

// mb_versões - Para strings com acentos (UTF-8)
// Essas funções são mais seguras com caracteres especiais, como "é" ou "ç"
$acentosMaiuscula = mb_strtoupper($frase, 'UTF-8');
echo "Com acentos em maiúsculas: $acentosMaiuscula<br>";
// Saída: OLÁ, VICTOR! TUDO BOM?

$acentosMinuscula = mb_strtolower($frase, 'UTF-8');
echo "Com acentos em minúsculas: $acentosMinuscula<br>";
// Saída: olá, victor! tudo bom?

echo "--------------Exercício----------------- <br>";
$promocao = mb_strtoupper("promoção", 'UTF-8');
$fraseOriginal = "este item esta em $promocao";
echo ucfirst($fraseOriginal) . "<br>";

?>
