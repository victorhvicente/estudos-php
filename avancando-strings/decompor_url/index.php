<?php

// A função parse_url analisa uma URL e retorna seus componentes (esquema, host, caminho, etc.)
$url = "https://www.google.com/?hl=pt_BR";

// Transforma a URL em um array com partes como esquema, host e query
$arrayUrl = parse_url($url);

print_r($arrayUrl);

echo "<br>";

// Exibe apenas o host da URL (neste caso: www.google.com)
echo $arrayUrl["host"];
echo "<br>";

$url2 = "http://www.horadecodar.com.//?busca-php";

// Analisa a segunda URL, mesmo com erro de formatação (dupla barra e query incorreta)
$arrayUrl2 = parse_url($url2);

print_r($arrayUrl2);
echo "<br>";
