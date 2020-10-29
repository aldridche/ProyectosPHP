<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido desde la cookie</title>
</head>
<body>
    <?php if (!empty($_COOKIE) && isset($_COOKIE['username'])): ?>
        <p>Bienvenido <?= $_COOKIE['username']; ?></p>
    <?php else: ?>
        <a href="formulario.html">Registro de usuario</a>
    <?php endif; ?>
</body>
</html>