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
];

$cursos = ['Curso de PHP', 'Curso de HTML', 'Curso de Javascript'];

// var_dump( $cursos );
// var_dump( empty( $cursos ) );
// var_dump( !empty( $cursos ) );
// var_dump( isset( $cursos[1] ) );

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>empty() e isset()</title>
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

    <h2>Mis Cursos</h2>
    <!-- Sí (NO está vacío el array) -->
    <?php if( !empty( $cursos ) ):  ?>
        <ul>
            <li> <?= $cursos[0]; ?> </li>

            <?php if( isset($cursos[1]) ): ?>
                <li> <?= $cursos[1]; ?> </li>
            <?php endif; ?>

            <?php if( isset($cursos[2]) ): ?>
                <li> <?= $cursos[2]; ?> </li>
            <?php endif; ?>
        </ul>
    <?php endif; ?>
</body>
</html>