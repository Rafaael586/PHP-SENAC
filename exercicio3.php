<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>3.faça um script que peça dois numeros e imprima a soma. !!!</h1>

    <form action="exercicio3.php" method="get" >
        Digite um numero:<br/>
        <input type="text" name="numero1" id="">
        <br/><br/>
         Digite um numero:<br/>
        <input type="text" name="numero2" id="">
        <br/><br/>
    <input type="submit" value="calcular" >
    
</form>
    
       
    <?php
   $n1 = $_GET["numero1"];
   $n2 = $_GET["numero2"];

   echo "A soma dos valores é:".($n1 + $n2);
   

   
?>



</body>
</html>