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

 // Obter o ID a ser excluído
 $id = $_GET["id"];

 // Comando SQL para excluir o registro
 $sql = "DELETE FROM clientes WHERE id = $id";

 if ($conn->query($sql) === TRUE) {
     echo "Registro excluído com sucesso. id = $id";
     echo '';
 } else {
     echo "Erro ao excluir o registro: " . $conn->error;
 }

 $conn->close();
?>

<a href="index.php">voltar</a>
</body>
</html>

