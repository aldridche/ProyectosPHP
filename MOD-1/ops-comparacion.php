<?php

// Operadores de comparación:

// Op: < ( menor a )
// var_dump( 1 < 2 ); // -> true
// var_dump( 1 < 1 ); // false

// Op: <= ( menor o igual a )
// var_dump( 1 <= 1 ); // -> true


// Op: > ( mayor a )
// var_dump( 2 > 1 ); // -> true
// var_dump( 1 > 1 ); // -> false
// var_dump( 1 > 2 ); // -> false

// Op: >= ( mayor o igual a )
// var_dump( 2 >= 1 ); // -> true
// var_dump( 2 >= 2 ); // -> true
// var_dump( 2 >= 3 ); // -> false



// Op: <=> ( spaceship/nave espacial )
// var_dump( 1 <=> 2 ); // -> -1
// var_dump( 1 <=> 0 ); // -> 1
// var_dump( 1 <=> 1 ); // -> 0


$a = 2;
$b = 2;
// Op: == ( Igual a )
// var_dump("1" == 1); // -> true, type jugglig

// Op: === ( Idéntico a )
// var_dump("1" === 1); // -> false, sin type jugglig

// Op: != ( diferente a )
var_dump("1" != 1); // -> false, type jugglig

// Op: !== ( no idéntico a )
var_dump("1" !== 1); // -> true, sin type jugglig
