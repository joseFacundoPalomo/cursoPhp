<?php

    if($_FILES){
        
        print_r($_FILES['archivo']['name']);

        move_uploaded_file($_FILES['archivo']['tmp_name'],$_FILES['archivo']['name']);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="ejercicio32.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="archivo">
        </br>
        </br>
        <input type="submit" value="enviar información">
    </form>
</body>
</html>