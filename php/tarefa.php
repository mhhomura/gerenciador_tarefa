<?php

session_start();
include('conexao.php');

$titulo = mysqli_real_escape_string($conexao, trim($_POST['titulo']));
$data = mysqli_real_escape_string($conexao, trim($_POST['data']));
$descricao = mysqli_real_escape_string($conexao, trim($_POST['descricao']));
$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
$sql = "INSERT INTO tarefa(titulo, data_, descricao, email) VALUES('$titulo','$data','$descricao','$email');";
if($conexao->query($sql) === TRUE) {
    $_SESSION['tarefa_adicionada'] = true;
}
$conexao->close();
header('Location: ../painel.php');
exit;

?>