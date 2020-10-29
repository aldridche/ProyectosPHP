<?php
//          0           1         2
$menu = ['Inicio', 'Cursos', 'Mi perfil'];
// var_dump($menu);
// echo "<br>";
// echo $menu[0];
// echo $menu[2];
// echo $menu[1];

$user = [
    'nombre' => 'Carlos',
    'apellido' => 'Hernández',
    'edad' => 28,
    'username' => 'CarlosH',
    'intereses' => ['Desarrollo web', 'Desarrollo de videojuegos']
]

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays 1</title>
</head>
<body>
    <nav>
        <ul>
            <li> <?php echo $menu[0]; ?>  </li>
            <li> <?php echo $menu[1]; ?> </li>
            <li> <?php echo $menu[2]; ?> </li>
        </ul>
    </nav>

    <h1> Bienvenido,  <?php echo $user['username'] ?> </h1>
    <h2>Éstos son tus datos: </h2>
    <p> Nombre y Apellido: <?php echo $user['nombre'] . ' ' . $user['apellido']; ?> </p>
    <p>Intereses: </p>
    <ul>
        <li><?php echo $user['intereses'][0]; ?></li>
        <li><?php echo $user['intereses'][1]; ?> </li>
    </ul>
</body>
</html>