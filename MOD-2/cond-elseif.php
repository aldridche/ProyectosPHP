<?php

$username = "";
$email = "";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicional elseif</title>
</head>
<body>
    <?php
        if($username)
        {
            echo "<p>USERNAME: ". $username ."</p>";
        }
        elseif($email)
        {
            echo "<p>EMAIL: ". $email ."</p>";
        }
        else {
            echo "<p>ESE USUARIO NO EXISTE</p>";
        }
    ?>

    <!-- Mezcla PHP/HTML 1 -->
    <?php if($username) { ?>
        <p>username: <?php echo $username; ?> </p>
    <?php } elseif($email) { ?>
        <p>email: <?php echo $email; ?> </p>
    <?php } else { ?>
        <p>ESE USUARIO NO EXISTE</p>
    <?php } ?>


    <!-- Mezcla PHP/HTML 2 -->
    <?php if($username): ?>
        <p>username: <?php echo $username; ?> </p>
    <?php elseif($email): ?>
        <p>email: <?php echo $email; ?> </p>
    <?php else: ?>
        <p>ESE USUARIO NO EXISTE</p>
    <?php endif; ?>

</body>
</html>