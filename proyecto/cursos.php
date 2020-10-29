<?php
    include_once( './includes/functions.php' );
    include_once( './includes/data.php' );
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
        <div class="col-12 my-4">
            <h2>Todos Cursos</h2>
            <small> <b>Total de cursos:</b> <?= count( $courses ) ?> </small>
        </div>

        <?php
            if( !empty($_COOKIE) && isset($_COOKIE['username']) ) {
                $username = $_COOKIE['username'];
            }
        ?>

        <?php foreach($courses as $course): ?>
            <?php if($username): ?>
                <?= printCourse($course, $username); ?>
            <?php else: ?>
                <?= printCourse($course); ?>
            <?php endif; ?>
        <?php endforeach; ?>

    </div>
</section>

<?php require_once('./includes/footer.php') ?>
</body>
</html>