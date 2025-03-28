<?php


$arr = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

for($i = 0; $i < count($arr); $i++){

    echo "Imprimindo o Array: " . ($i + 1);
    echo "<br>";

    for($j = 0; $j < count($arr[$i]); $j++){
        echo $arr[$i][$j];
        echo "<br>";
    }
}



?>