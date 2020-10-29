<?php

$username = "Carlos";
$logged_in = false;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicional If</title>
</head>
<body>
    <nav>
        <ul>
            <li>Inicio</li>
            <li>Cursos</li>
            <li>Grupos</li>
            <?php
                if( $logged_in )
                {
                    echo "<li>" . $username . "</li>";
                }
                else
                {
                    echo "<li>Iniciar Sesión</li>";
                }

                echo "Hola mundo!";
                echo "Hola mundo!";
                echo "Hola mundo!";
                echo "Hola mundo!";
                echo "Hola mundo!";

            ?>
        </ul>
    </nav>
</body>
</html>