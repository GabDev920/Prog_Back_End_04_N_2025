<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula06</title>
</head>
<body>
    <h1>Aula06_04 - 17/09/25</h1>
    <?php
    echo "<pre>"; print_r($_REQUEST);echo "</pre>";
    $num1=$_POST["num1"];
    $num2=$_POST["num2"];
    ?>
    <h2>ARITMÉTICOS</h2>
    <?php
    echo "Adição:".($num1 + $num2);
    echo "<br>Subtração:".($num1 - $num2);
    echo "<br>Multiplicação:".($num1 * $num2);
    echo "<br>Divisão:".($num1 / $num2);
    echo "<br>Módulo:".($num1 % $num2);
    echo "<br>Exponenciação:".($num1 ** $num2);
    ?>
    <h2> COMPARAÇÃO</h2>
    <?php
    echo "Igualdade = ".($num1==$num2)."<br>";
    echo "Idêntico = ".($num1===$num2)."<br>";
    echo "Não igual = ".($num1!=$num2)."<br>";
    echo "Não idêntico = ".($num1!==$num2)."<br>";
    echo "Menor: ".($num1<$num2)."<br>";
    echo "Menor ou igual: ".($num1<=$num2)."<br>";
    echo "Maior: ".($num1>$num2)."<br>";
    echo "Maior ou igual: ".($num1>=$num2)."<br>";
    ?>
</body>
</html>