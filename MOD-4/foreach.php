<?php

$book = [
    'title' => '1984',
    'author' => 'George Orwell',
    'editorial' => 'DEBOLSILLO'
];


// foreach( $book as $b ) {
//     echo $b . "<br>";
// }

foreach( $book as $key => $value ) {
    echo $key . " -> " . $value . "<br>";
}

?>