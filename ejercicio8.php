<?php
if ($_POST){
    $num1=$_POST['valorA'];
    $num2=$_POST['valorB'];

    //SUMA
    $Suma=$num1+$num2;
    $Resta=$num1-$num2;
    $Multiplicacion=$num1*$num2;
    $Division=$num1/$num2;

    echo "<br/>".$Suma;
    echo "<br/>".$Resta;
    echo "<br/>".$Multiplicacion;
    echo "<br/>".$Division;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritmeticos</title>
</head>
<body>
    
    <form action="ejercicio8.php" method="post">
    Valor A:
    <input type="text" name="valorA" id="">
    <br/>
    Valor B:
    <input type="text" name="valorB" id="">
    <br/>
    <input type="submit" value="Calcular">
    </form>
</body>
</html>