<?php

    $txtNombre="";
    $rlenguaje="";
    
    $checkfront="";
    $checkback="";
    
    $opSistema="";
    $contacto="";


    if($_POST){
        $txtNombre = (isset($_POST['txtNombre']))?$_POST['txtNombre']:""; // ISSET DETERMINA SI UNA VARIABLE ESTA DEFINIDA O ES NULA
        $rlenguaje = (isset($_POST['lenguaje']))?$_POST['lenguaje']:"";
        
        $checkfront = (isset($_POST['checkfront'])=="si") ?"checked":"";
        $checkback = (isset($_POST['checkback'])=="si") ?"checked":"";
        
        
        $opSistema = (isset($_POST['opSistema'])) ?$_POST['opSistema']:"";  

        $contacto = (isset($_POST['contacto'])) ?$_POST['contacto']:"";
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
    <?php
        if($_POST && $_POST['txtNombre'] != "" ){            
            echo "Hola ". $txtNombre;
        }
        else{
            echo "Debe ingresar un nombre";
        }
    ?>


    <?php 

        if($_POST){
            print_r($_POST);
        }


    ?>

    <form action="ejercicio31.php" method="POST" >
        <input type="text" name="txtNombre" value=<?php echo $txtNombre;?>>
        <br/>
        <br/>
        <br/>
        Selecciona un lenguaje:
        <br/>PHP <input type="radio" <?php echo ($rlenguaje=="php")?"checked":""; ?> name="lenguaje" value="php">
        <br/>JAVA <input type="radio" <?php echo ($rlenguaje=="java")?"checked":""; ?> name="lenguaje" value="java">
        <br/>PYTHON <input type="radio" <?php echo ($rlenguaje=="python")?"checked":""; ?> name="lenguaje" value="python">
        <br/>
        <br/>      
        
        Selecciona una especialidad:
        <br/>FRONTEND <input type="checkbox" <?php echo  $checkfront; ?> name="checkfront" value="si">
        <br/>BACKEND <input type="checkbox" <?php echo $checkback; ?> name="checkback" value="si">
        <br/>
        <br/>

        Sistema Operativo:
        <br/>
        <select name="opSistema" id="">
            <option value="">[Ninguno]</option> 
            <option value="linux" <?php echo ($opSistema=="linux")? "selected":""; ?>>Linux</option>
            <option value="windows"  <?php echo ($opSistema=="windows")? "selected":""; ?>>Windows</option>
        </select>
        <br/>
        <br/>
        <textarea name="contacto" id="" cols="30" rows="10">
            <?php echo $contacto ?>
        </textarea>
        <br/>
        <br/>
        <input type="submit"  value="Enviar información">  
    </form>
</body>
</html>