<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

require_once('conecao.php');
       // Obtém os dados do formulário
$nome = $_GET["nome"];
$nascimento = $_GET["nascimento"];
$situacao = $_GET["situacao"];

// Aqui você pode realizar qualquer processamento adicional com os dados, como salvar em um banco de dados, enviar por e-mail, etc.
$insert = "INSERT INTO clientes (nome, nascimento, situacao) VALUES ('$nome', '$nascimento', '$situacao')";
if ($conn->query($insert) === TRUE) {
    echo "Dados inseridos com sucesso";
} else {
    echo "Erro ao inserir dados: " . $conn->error;
}

// Fechar a conexão
$conn->close();

require_once('listagem.php');
?>

<a href="index.php">Voltar</a>
</body>
</html>