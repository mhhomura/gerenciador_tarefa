<?php

if(!$_SESSION['usuario']) {
	header('Location: ../telalogin.php');
	exit();
}
?>