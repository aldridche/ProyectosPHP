<?php

// Ordenando arrays:

$book = [
    'title' => '1984',
    'author' => 'George Orwell',
    'editorial' => 'DEBOLSILLO'
];

$book1 = $book2 = $book3 = $book;

var_dump( $book );

echo "<br><br>";
sort( $book1 );
var_dump( $book1 );

echo "<br><br>";
asort( $book3 );
var_dump( $book3 );

echo "<br><br>";
ksort( $book2 );
var_dump( $book2 );