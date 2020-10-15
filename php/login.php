<?php
session_start();
include('conexao.php');

if(empty($_POST['email']) || empty($_POST['senha'])) {
	header('Location: ../telalogin.php');
	exit();
}

$email = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "SELECT email, usuario from usuario where email = '{$email}' and senha = md5('{$senha}')";
$result = mysqli_query($conexao, $query);
$row = mysqli_num_rows($result);

if($row == 1) {
	$_SESSION['usuario'] = $email;
	$regis[] = $row;
	header('Location: ../painel.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: ../telalogin.php');
	exit();
}

?>