<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Faça um script que peça 2 números inteiros e um número real. Calcule e mostre:

     •o produto do dobro do primeiro com metade do segundo .

     •a soma do triplo do primeiro com o terceiro.

     •o terceiro elevado ao cubo. !!!</h1>

    <form action="exercicio10.php" method="get" >
        Digite um numero inteiro:<br/>
        <input type="text" name="numero1" id="">
        <br/><br/>
         Digite um numero inteiro:<br/>
        <input type="text" name="numero2" id="">
        <br/><br/>
          Digite um numero real:<br/>
        <input type="text" name="numero3" id="">
        <br/><br/>
    <input type="submit" value="calcular" >
    
</form>
    
       
    <?php
   $n1 = $_GET["numero1"];
   $n2 = $_GET["numero2"];
   $n3 = $_GET["numero3"];

   echo "o dobro do primeiro com a metade do segundo :".($n1 * 2) * ($n2 / 2);
    echo "<br/>A soma do triplo do primeiro com o terceiro :".($n1 * 3) + $n3;
   echo "<br/>o terceiro elevado ao cubo :".($n3 * $n3) * $n3 ;
     
?>



</body>
</html>