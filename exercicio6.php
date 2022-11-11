<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>6.faça um script que calcule a area de um quadrado, em seguida mostre o dobro desta area para o usuario . !!!</h1>

    <form action="exercicio6.php" method="get" >
        quanto mede cada lado:<br/>
        <input type="text" name="metros" id="">
         <br/><br/>
    <input type="submit" value="calcular" >
        
    </form>
    <?php
   $n1 = $_GET["metros"];
  
   echo "o dobro da area do seu quadrado é : ".($n1 * $n1) * 2;

   
?>



</body>
</html>