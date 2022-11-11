<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>7.Faça um script que pergunte quanto voce ganha por hora e o numero de horas trabalhadas no mes.Calcule e mostre o total do seu salario no referido mes. !!!</h1>

    <form action="exercicio7.php" method="get" >
        quanto voce ganha por hora?:<br/>
        <input type="text" name="salario_hora" id="">
         <br/><br/>
          quantas horas voce trabalha por mes?:<br/>
         <input type="text" name="horas_trabalhadas" id="">
         <br/><br/>
    <input type="submit" value="calcular" >
        
    </form>
    <?php
   $n1 = $_GET["salario_hora"];
   $n2 = $_GET["horas_trabalhadas"];
  
   echo "seu salario total esse mes é: ".($n1 * $n2);

   
?>



</body>
</html>