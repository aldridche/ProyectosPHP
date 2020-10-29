<?php

    include_once( './includes/functions.php' );
    include_once( './includes/data.php' );

    if( !empty($_POST) && isset( $_POST['username'] ) ) {
        echo "Método POST";

        // Generar información del usuario: cookies
        $username = $_POST['username'];
        $email = $_POST['email'];
        $age = $_POST['age'];
        $profession = $_POST['profession'];
        $time = time() + 30 * 24 * 60 * 60;

        setcookie('username', $username, $time);
        setcookie('email', $email, $time);
        setcookie('age', $age, $time);
        setcookie('profession', $profession, $time);
        echo "<br>Cookies de usuario registrado creadas!";
    } else {
        echo "Método GET";
        // Generar información del usuario: cookies
        if( !empty($_COOKIE) && isset($_COOKIE['username']) ) {
            $username = $_COOKIE['username'];
            $email = $_COOKIE['email'];
            $age = $_COOKIE['age'];
            $profession = $_COOKIE['profession'];
            $time = time() + 30 * 24 * 60 * 60;
        }

        // Agregar curso a archivo json
        if( !empty($_GET) && isset( $_GET['name'] ) ) {
            // $myNewCourseArr = $_GET;
            // $myNewCourseJSON = json_encode($myNewCourseArr);
            // file_put_contents('./includes/myCourses.json', $myNewCourseJSON);

            // Leer el contenido del json:
            $coursesJSON = file_get_contents('./includes/myCourses.json');
            $tempArray = json_decode($coursesJSON, true);

            if( is_null($tempArray) ) {
                $tempArray = [];
            }

            array_push( $tempArray, $_GET );

            $jsonData = json_encode($tempArray);

            file_put_contents('./includes/myCourses.json', $jsonData);
        }
    }

    // $user = [
    //     'name' => 'Carlos',
    //     'featured' => 'avatar.png',
    //     'lastName' => 'Hernández',
    //     'age' => 28,
    //     'username' => 'CarlosH',
    //     'profession' => 'Web Developer',
    //     'intereses' => ['Desarrollo web', 'Desarrollo de videojuegos']
    // ];
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

<section class="container-fluid">
    <div class="row justify-content-center">
    <?php if( isset($username) ): ?>
        <div class="col-auto my-4 text-center">
            <h2>Mi perfil</h2>
            <img src="./images/avatar.jpg" class="img-fluid" width="200" alt="Foto de perfil de <?= $user['name']?>" />
            <p><?= $username ?></p>
            <p><?= $profession ?> </p>
        </div>
    <?php else: ?>
        <div class="col-auto my-4">
            <a href="registro.php" class="btn btn-primary">Ir a registro</a>
        </div>
    <?php endif; ?>
    </div>
</section>

<section class="container-fluid">
    <div class="row justify-content-center">
    <?php if( isset($username) ): ?>

        <?php
            // Obtiene los cursos del usuario:
            $myCoursesJSON = file_get_contents('./includes/myCourses.json');
            $myCoursesArray = json_decode($myCoursesJSON, true);
            $totalCourses = count( $myCoursesArray );
        ?>

        <?php if($totalCourses): ?>
            <!-- Si el alumno está inscrito a cursos, los mostramos: -->
            <div class="col-12 text-center mb-4">
                <h2>Mis Cursos</h2>
            </div>
            <?php foreach($myCoursesArray as $course): ?>
                <?= printCourse( $course ) ?>
            <?php endforeach; ?>

        <?php else: ?>
            <div class="col-12 text-center mb-4">
                <p class="text-center">
                    <a href="cursos.php">Inscríbete</a> a cursos!
                </p>
            </div>
        <?php endif; ?>
    <?php else: ?>
        <p class="text-center">
            <a href="registro.php">Regístrate</a> para poder inscribirte a cursos
        </p>
    <?php endif; ?>
    </div>
</section>


<?php require_once('./includes/footer.php') ?>
</body>
</html>