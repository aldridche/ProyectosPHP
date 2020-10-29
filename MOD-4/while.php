<?php

$i = 1;

// while( $i < 4 ) {
//     echo $i . " ";
//     $i++; // 1, 2, 3, 4
// }

// echo "<br>continua su flujo normal";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bucle while</title>
</head>
<body>
    <select name="" id="">
        <?php while( $i <= 10 ): ?>
            <option value=""> <?= $i ?> </option>
            <?php $i++; ?>
        <?php endwhile; ?>
    </select>
</body>
</html>