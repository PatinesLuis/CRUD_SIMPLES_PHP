<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editando registro</title>
</head>
<body>
<?php
require('conecao.php');
$id = $_GET["id"];
$nome = $_GET["nome"];
$nascimento = $_GET["nascimento"];
$situacao = $_GET["situacao"];
$sql = "SELECT id, nome, nascimento, situacao FROM clientes WHERE id=$id";
$result = $conn->query($sql);


?>
<h2>Editando <?php $nome?></h2>
<form action="editar_registro.php" method="get">
Registro <input readonly type="text" name="id" value= '<?php echo $id?>'>
   Nome <input type="text" name="nome" value= '<?php echo $nome?>'>
   nascimento <input type="date" name="nascimento"  value= '<?php echo  $nascimento?>'>
   situacao <select name="situacao" id="situacao">
            <option  value= '<?php echo $situacao?>'>Situação atual - <?php echo $situacao?></option>
            <option value="ativo">Ativo</option>
            <option value="Inativo">Inativo</option>
            <option value="Processando">Processando</option>
       </select>
   <input type="submit" value="Editar registro" name="Editar">

</form>

<?php

?>

    
</body>
</html>