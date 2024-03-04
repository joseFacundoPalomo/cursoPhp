<?php
    if($_POST){
        
        echo "HOLA ";
    }
    else{
        echo "no se ah enviado nada";
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
    <form action="ejercicio5.php" method="post">
        Nombre
        <br>
        <input type="text" name="txtNombre" id="">
        <br>
        Apellido
        <br>
        <input type="text" name="txtApellido" id="">
        <br>
        <input type="submit" value="Enviar">
    </form>

</body>
</html>