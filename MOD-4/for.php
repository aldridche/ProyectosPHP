<?php

    for( $i = 1; $i < 4; $i++ )
        echo $i . " ";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bucle for</title>
</head>
<body>
    <select name="" id="">
        <?php for( $i = 10 ;$i >= 0; $i-- ): ?>
            <option value=""> <?= $i ?> </option>
        <?php endfor; ?>
    </select>
</body>
</html>