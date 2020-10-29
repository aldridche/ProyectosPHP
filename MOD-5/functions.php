<?php

// Declarar una función:
// function addNumbers() {
//     // cuerpo de la función:
//     echo 2 + 2;
// }

// Return
// function addNumbers() {
//     // cuerpo de la función:
//     $sum = 2 + 2;
//     echo $sum;
//     return $sum;
// }


// Con parámetros:
function addNumbers($num1, $num2) {
    // cuerpo de la función:
    return $num1 + $num2;
}

$a = 8;
$b = 10;
$result = addNumbers($a, $b);

echo $result;

?>