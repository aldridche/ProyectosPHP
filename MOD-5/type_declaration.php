<?php
declare( strict_types = 1 );

// Con parámetro por default:
function addNumbers(int $num1, int $num2, bool $printResult = false): int {
    // Variables locales
    $sum = $num1 + $num2;

    if( $printResult ) {
        echo "El resultado de la suma es: " . $sum;
    }

    return $sum;
}


// $result = addNumbers(7, 7, false);
// echo $result;