<?php

//  Variable global
$num1 = 2;

// Con parámetro por default:
function addNumbers($num1, $num2, $printResult = false) {
    // Variables locales
    $sum = $num1 + $num2;

    if( $printResult ) {
        echo "El resultado de la suma es: " . $sum;
    }

    return $sum;
}


$result = addNumbers(5, 7, true);

echo "<br>";
echo $result;

// Paso de argumentos por referencia
function modify(&$a) {
    $a = 3;
}

$a = 2;

modify($a);

var_dump( $a );