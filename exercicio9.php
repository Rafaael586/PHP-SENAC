<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>9. Faça um script que peça a temperatura em celsius transforme e mostre a temperatura em graus farenheit.!!!</h1>

    <form action="exercicio9.php" method="get" >
        Digite os graus em Celsius:<br/>
        <input type="text" name="graus" id="">
         <br/><br/>
    <input type="submit" value="calcular" >
        
    </form>
    <?php
   $n1 = $_GET["graus"];

   echo "temperatura em Farenheit :".$n1 * (9 / 5) + 32;

   
?>



</body>
</html>