<?php 
//          0         1          2
$menu = ['Inicio', 'Cursos', 'Mi perfil'];

// var_dump( count($menu) );
echo "con while: <br>";
$i = 0;

while( $i < count($menu) ) {
    echo $menu[ $i ] . " ";
    $i++;
}

echo "<br><br>";

echo "con for: <br>";
for($i = 0; $i < count($menu); $i++ ) {
    echo $menu[ $i ] . " ";
}


?>