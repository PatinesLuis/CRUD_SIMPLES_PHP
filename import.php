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

if(isset($_POST["submit"])) {
    $file = $_FILES["file"]["tmp_name"];

    // Ler o conteúdo do CSV
    if (($handle = fopen($file, "r")) !== FALSE) {
        while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
            if (!isset($header)) {
                $header = $data;
                continue;
            }
            $nome = isset($data[0]) ? $data[0] : null;
            $nascimento = isset($data[1]) ? $data[1] : null;
            $situacao = isset($data[2]) ? $data[2] : null;

            // Imprimir valores para depuração
    echo "Nome: $nome, nascimento: $nascimento<br>";
    $nascimento = date('Y-m-d', strtotime(str_replace('/', '-', $nascimento)));

            // Inserir dados na tabela
            $sql = "INSERT INTO clientes (nome, nascimento, situacao) VALUES ('$nome', '$nascimento', '$situacao')";
            $conn->query($sql);
        }

        fclose($handle);
        echo "Dados importados com sucesso!";
    } else {
        echo "Erro ao ler o arquivo CSV.";
    }
}
?>

<a href="index.php">Voltar</a>
    
</body>
</html>