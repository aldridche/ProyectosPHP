<?php

    include_once( './includes/functions.php' );
    include_once( './includes/data.php' );

    $user = [
        'name' => 'Carlos',
        'featured' => 'avatar.png',
        'lastName' => 'Hernández',
        'age' => 28,
        'username' => 'CarlosH',
        'profession' => 'Web Developer',
        'intereses' => ['Desarrollo web', 'Desarrollo de videojuegos']
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto || Cursos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
<?php require_once('./includes/menu.php') ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 text-center">
            <h1>Registro</h1>
        </div>
        <div class="col-4">
            <form action="index.php" method="POST">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" required>
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username" required>
                </div>
                <div class="form-group">
                    <label for="age">Edad</label>
                    <input type="number" class="form-control" name="age">
                </div>
                <div class="form-group">
                    <label for="profession">Profesión</label>
                    <input type="text" class="form-control" name="profession">
                </div>
                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" class="form-control" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary">Registrarme</button>
            </form>
        </div>
    </div>
</div>

<?php require_once('./includes/footer.php') ?>
</body>
</html>