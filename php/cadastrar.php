<?php
session_start();
include("conexao.php");

$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$usuario = mysqli_real_escape_string($conexao, trim($_POST['usuario']));
$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));

/* $data = mysqli_real_escape_string($conexao, trim(md5($_POST[$timestamp]))); */

$sql = "SELECT count(*) as total FROM usuario WHERE email = '$email'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
	$_SESSION['email_existe'] = true;
	header('Location: ../cadastro.php');
	exit;
}

$sql = "SELECT count(*) as todos FROM usuario WHERE usuario = '$usuario'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['todos']== 1){
	$_SESSION['usuario_existe'] = true;
	header('Location: ../cadastro.php');
	exit;
}

$sql = "INSERT INTO usuario(nome, usuario, email, senha) VALUES('$nome','$usuario','$email', '$senha');";

if($conexao->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location: ../cadastro.php');
exit;
?>