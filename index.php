<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <title>Login teste</title>
</head>
<body>
    <?php
    include_once('listagem.php');
    listas_dados();
    ?>

    <form action="inserir.php" method="GET">
       NOME <input type="text" name="nome" required>
       nascimento <input type="date" name="nascimento" required>
       situacao <select name="situacao" id="situacao">
            <option value="ativo">Ativo</option>
            <option value="Inativo">Inativo</option>
            <option value="Processando">Processando</option>
       </select>
       
       <input type="submit" value="enviar">
    </form>

    <form action="import.php" method="post" enctype="multipart/form-data">
        <label for="file">Escolha um arquivo CSV:</label>
        <input type="file" name="file" id="file" accept=".csv">
        <button type="submit" name="submit">Importar</button>
    </form>

    

    <h2>Imagens armazenadas</h2>

    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="imagem">Escolha uma imagem:</label>
        <input type="file" name="imagem" id="imagem" accept="image/*">
        <button type="submit">Enviar</button>
    </form>

    <img src="imagem.php?id=87" alt="Minha Imagem">

    <script>
        function deletar(variavel){
            alert("deseja apagar o ID: "+ variavel)
        }
    </script>
</body>
</html>