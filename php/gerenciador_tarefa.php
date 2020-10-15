<?php
    include('conexao.php');
    error_reporting(0);

    $registros = [];
    if($_GET['excluir'] == true){
        $sql ="DELETE FROM tarefa WHERE Id = ?";
        $stmt = $conexao->prepare($sql);
        $stmt->bind_param("i", $_GET['excluir']);
        $stmt->execute();
    }

    $email = $_SESSION['usuario'];
    
    $sql = "SELECT Id, titulo, data_, descricao, email FROM tarefa WHERE email = '{$email}'";
    $resultado = $conexao->query($sql);
    if($resultado->num_rows > 0){ 
        while($row = $resultado->fetch_assoc()){
            $registros[] = $row;
        }
    }
    $conexao->close();
?>