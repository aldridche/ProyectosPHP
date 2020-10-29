<?php

// TODOS LOS NÚMEROS, excepto: 0 y 0.0 son considerados: TRUE
// TODOS LOS STRINGS, excepto: '' y '0';

// Operador &&
//         true   &&   true    -> true
// var_dump( (8 < 9) && (9 < 10) );
// var_dump( 10 && 0 );


// Operador ||
//             false         ||       true              -> true
// var_dump( ('hola' != 'hola') || ('adiós' != 'goodbye') );
// var_dump( ('hola' != 'hola') || ('adiós' != 'adiós') );

// Operador !

var_dump(!true);
var_dump(!false);
//        !  ((true      &&     true           ) -> true) -> false
var_dump( !((8 <= 10) && ('carlos' != 'CARLOS')) );