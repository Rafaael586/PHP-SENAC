<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>5.faça um script que converta metros para centimetros. !!!</h1>

    <form action="exercicio5.php" method="get" >
        Digite os metros:<br/>
        <input type="text" name="metros" id="">
         <br/><br/>
    <input type="submit" value="calcular" >
        
    </form>
    <?php
   $n1 = $_GET["metros"];

   echo "centimetros correspondentes :".($n1 * 100);

   
?>



</body>
</html>