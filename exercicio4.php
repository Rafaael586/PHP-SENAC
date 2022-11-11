<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>4.faça um script que peça as 3 notas de um aluno e mostre a media. !!!</h1>

    <form action="exercicio4.php" method="get" >
        Digite a nota 1:<br/>
        <input type="text" name="numero1" id="">
        <br/><br/>
         Digite a nota 2:<br/>
        <input type="text" name="numero2" id="">
        <br/><br/>
          Digite a nota 3:<br/>
        <input type="text" name="numero3" id="">
        <br/><br/>
    <input type="submit" value="calcular" >
    
</form>
    
       
    <?php
   $n1 = $_GET["numero1"];
   $n2 = $_GET["numero2"];
   $n3 = $_GET["numero3"];

   echo "A media das notas é:".($n1 + $n2 +$n3) / 3;
   

   
?>



</body>
</html>