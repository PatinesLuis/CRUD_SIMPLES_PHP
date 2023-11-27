<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

    require('conecao.php');
    $id = $_GET["id"];
    $nome = $_GET["nome"];
    $nascimento = $_GET["nascimento"];
    $situacao = $_GET["situacao"];
    

    $sql = "UPDATE clientes SET nome ='$nome', nascimento ='$nascimento', situacao ='$situacao' WHERE id = '$id'";
    $result = $conn->query($sql);
    if ($conn->query($sql) === TRUE) {
        echo "Registro editado com sucesso. nome = $nome";
    } else {
        echo "Erro ao excluir o registro: " . $conn->error;
    }
   
    $conn->close();


?>

<a href="index.php">VOLTA AI </a>
</body>
</html>