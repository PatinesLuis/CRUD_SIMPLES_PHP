<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Verifica se um arquivo foi selecionado
    if(isset($_FILES["imagem"]) && $_FILES["imagem"]["error"] == 0) {
        
        require('conecao.php');

        // Prepara a imagem para o banco de dados
        $imagem = addslashes(file_get_contents($_FILES["imagem"]["tmp_name"]));

        // Insere a imagem no banco de dados
        $sql = "INSERT INTO clientes (conteudo) VALUES ('$imagem')";
        
        if ($conn->query($sql) === TRUE) {
            echo "Imagem enviada com sucesso!";
        } else {
            echo "Erro ao enviar a imagem: " . $conn->error;
        }

        // Fecha a conexão
        $conn->close();

    } else {
        echo "Erro: Nenhuma imagem selecionada.";
    }
} else {
    echo "Acesso inválido.";
}

?>

<a href="index.php">Voltar</a>
</body>
</html>