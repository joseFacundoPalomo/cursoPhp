<?php
    if($_POST){

        $boton= $_POST["btnValor"];

        switch($boton){
            case 1: 
                echo "Presiono btn 1";
                break;
            case 2:
                echo "Presiono btn 2";
                break;
            case 3:
                echo "Presiono btn 3";
                break;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>
<body>
    <form action="ejercicio13.php" method="post">
        <input type="submit" name="btnValor" value="1">
        <input type="submit" name="btnValor" value="2">
        <input type="submit" name="btnValor" value="3">
    </form>
</body>
</html>