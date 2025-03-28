<?php

    $frase = "String para array";
    $arr = explode(" ", $frase);

    foreach ($arr as $i) {
        echo $i . "\n";
    }

    echo "<br>";
    echo "<br>";
    
    $array = ["O", "PHP", "É", "MUITO", "LEGAL"];
    $string = implode(" - ", $array);

    echo $string;
?>