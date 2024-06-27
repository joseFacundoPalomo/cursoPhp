<?php

    if($_POST){
        $valorA= $_POST['valorA']; 
        $valorB= $_POST['valorB'];
        
        $suma= $valorA+$valorB;
        $resta= $valorA-$valorB;
        $producto= $valorA*$valorB;
        $division= $valorA/$valorB;

        echo "<br>".$suma;        
        echo "<br>".$resta;       
        echo "<br>".$producto;        
        echo "<br>".$division;      
        
        if($valorA == $valorB){
            echo "El valor de A es igual a el valor de B <br>";

            if($valorA==4){
                echo"El valor es 4 <br>";
            }

            if($valorA==5){
                echo"El valor es 5 <br>";
            }

        }

        if(($valorA==$valorB) && ($valorA==4)){
            echo "El valor de A es igual a B y es un número 4";
        }

    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores aritemeticos</title>
</head>
<body>
    <form action="ejercicio11.php" method="post">
        Valor A:
        <input type="text" name="valorA" id="">
        <br>
        Valor B:
        <input type="text" name="valorB" id="">
        <br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>