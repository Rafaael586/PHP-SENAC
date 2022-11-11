<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>12.Tendo como dado de entrada a altura (h) de uma pessoa, construa um script que calcule seu peso ideal, utilizando as seguintes fórmulas:
        •Para homens: (72.7*h) - 58

        •Para mulheres: (62.1*h) – 44.7.!!!</h1>

    <form action="exercicio12.php" method="get" >
       Digite a altura do homem:<br/>
        <input type="text" name="alturahm" id="">
         <br/><br/>
          Digite a altura da mulher:<br/>
        <input type="text" name="alturaml" id="">
         <br/><br/>
    <input type="submit" value="calcular" >
        
    </form>
    <?php
   $n1 = $_GET["alturahm"];
   $n2 = $_GET["alturaml"];

   echo "o seu peso ideal do homem é :".(72.7 * $n1) - 58;
   echo "<br>o seu peso ideal da mulher é :".(62.1 * $n2) - 44.7;


   
?>



</body>
</html>