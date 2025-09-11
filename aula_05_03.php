<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula05_03 - 10/09/25</title>
</head>
<body>
    <h1>Aula05_03 - 10/09/25</h1>
    <?php
    echo "<pre>"; print_r($_REQUEST);echo "</pre>";
    $nome=$_POST["nome"];
    $data=$_POST["data"];
    $av1=$_POST["av1"];
    $av2=$_POST["av2"];
    $média= ($av1 + $av2) / 2;
    echo "Nome: $nome<br>";
    echo "Data: $data<br>";
    echo "AV1: $av1<br>";
    echo "AV2: $av2<br>";
    echo "<br>Média: $média";
    ?>
</body>
</html>