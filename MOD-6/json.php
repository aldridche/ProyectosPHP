<?php
    
    // Escribir contenido en JSON
    $oneMoreBook = [
        ['title' => 'Pideme lo que quieras', 'author' => 'Megan Maxwell'],
        ['title' => 'Once minutos', 'author' => 'Paulo Cohelo']
    ];

    // para escribirlo necesitamos un json_encode()
    $newBookJSON = json_encode($oneMoreBook);   // ponerlo en el json
    
    file_put_contents('./libros.json',$newBookJSON);    // formatear y ponerlo
    echo"Datos almacenados correctamente";
    echo "<br><br><br><br>";
    
    
    
    // Leer contenido JSON
    $booksJSON = file_get_contents('./libros.json'); // traerlo

    var_dump($booksJSON);
    echo "<br><br>";
    $booksArray = $booksJSON = (json_decode($booksJSON, true));  // formatear variable y convertirlo en arreglo (necesario el true) traerlo
                            // en caso de ser (json_decode($booksJSON, false));, se convertiria en false

    var_dump($booksArray);
    
?>