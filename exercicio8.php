<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>8Faça um script que peça a temperatura em farenheit transforme e mostre a temperatura em graus celsios. C=(5/* (F-32) / 9) . !!!</h1>

    <form action="exercicio8.php" method="get" >
        Digite os graus em farenheit:<br/>
        <input type="text" name="graus" id="">
         <br/><br/>
    <input type="submit" value="calcular" >
        
    </form>
    <?php
   $n1 = $_GET["graus"];

   echo "temperatura em celsius :".($n1 - 32) * (5 / 9);

   
?>



</body>
</html>