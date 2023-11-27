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
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    
        // Recupera a imagem do banco de dados
        $sql = "SELECT conteudo FROM imagens WHERE id = $id";
        $result = $conn->query($sql);
    
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
    
            // Exibe a imagem no front end
            header("Content-Type: image/png"); // Altere o tipo de conteúdo conforme necessário
            echo $row['conteudo'];
        } else {
            echo "Imagem não encontrada.";
        }
    } else {
        echo "ID de imagem não fornecido.";
    }
    
    // Fecha a conexão
    $conn->close();
?>

<a href="index.php">voltar</a>
</body>
</html>