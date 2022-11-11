<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>2.faça um programa que peça um numero e entao mostre a mensagem.O numero informado foi[numero] !!!</h1>

    <form action="exercicio2.php" method="get" >
        Digite um numero:<br/>
        <input type="text" name="exercicio1" id="">
        
    </form>
    <?php
   $n1 = $_GET["exercicio1"];

   echo "Seu numero é:".$n1

   
?>



</body>
</html>