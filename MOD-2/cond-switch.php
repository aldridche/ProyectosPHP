<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condiconal Switch</title>
</head>
<body>
    <?php
    $menu = 'cursos';

    switch ($menu) {
        case 'inicio':
            echo "<h1>Bienvenido a nuestro sitio web</h1>";
            break;
        case 'cursos':
            echo "<h1>Mira todos nuestros cursos!</h1>";
            break;
        default:
            echo "<h1>Upps! no se encuentra la página</h1>";
            break;
    }
    echo "La ejecución continuar....";
    ?>
</body>
</html>