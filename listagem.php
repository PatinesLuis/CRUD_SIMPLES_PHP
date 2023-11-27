<?php

function listas_dados(){
    require('conecao.php');
    $sql = "SELECT id, nome, nascimento, situacao FROM clientes";
    $result = $conn->query($sql);

    function formatarData($data) {
        $dataObj = new DateTime($data);
        return $dataObj->format('d/m/Y');
    }
    
foreach ($result as $registro) {
    $datanascimento = $registro['nascimento'];
    $dataNascimentoFormatada = formatarData($datanascimento);
    
    echo '<p>ID: ' . $registro['id'] . ', Nome: ' . $registro['nome'] . ', nascimento: ' . $dataNascimentoFormatada .  ', Registro: ' . $registro['situacao'] . '</p>';
    echo '<form action="excluir_registro.php" method="GET">';
    echo '<input type="hidden" name="id" value="' . $registro['id'] . '">';
    echo '<input type="submit" value="Deletar" name="deletar_registro">';
    echo '</form>';
    echo '<form action="registro.php" method="GET">';
    echo '<input type="hidden" name="id" value="' . $registro['id'] . '">';
    echo '<input type="hidden" name="nome" value="' . $registro['nome'] . '">';
    echo '<input type="hidden" name="nascimento" value="' . $registro['nascimento'] . '">';
    echo '<input type="hidden" name="situacao" value="' . $registro['situacao'] . '">';
    echo '<input type="submit" value="Editar" name="registro">';
    echo '</form>';
}
$conn->close();
}


   


