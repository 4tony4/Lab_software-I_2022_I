<?php
if ($_POST){
    $nom=$_POST['txtNombre'];
    $apell=$_POST['Apellido'];
    echo "Hola ".$nom."".$apell; 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio4.php" method="post">
    Nombre:
    <input type="text" name="txtNombre" id="">
    <br/>

    Apellido:
    <input type="text" name="Apellido" id="">
    <br/>

    <input type="submit" value="Enviar">
    </form>
</body>
</html>