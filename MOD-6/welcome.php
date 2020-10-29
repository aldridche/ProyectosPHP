<?php
    // var_dump($_POST);
    if( !empty( $_POST )) {
        setcookie('username', $_POST['username'], time() + 30*24*60*60);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensaje de guardado exitoso</title>
</head>
<body>
    <?php if( !empty( $_POST )):?>
        <p>Bienvenido <?= $_POST['username'] ?></p>
        <p>Tu email es: <?= $_POST['email'] ?></p>
    <?php else: ?>
        <h1>ACCESO DENEGADO...</h1>
    <?php endif; ?>
</body>
</html>