<?php
session_start();
?>

<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>To Do List Cadastro</title>
    <link rel="stylesheet"  href="css/estilocadastro.css">
    
</head>

<body>
    <div id="body-form">
        
        <h1>Cadastro</h1>
        <?php
            if(isset($_SESSION['status_cadastro'])){
        ?>
        <div id="sucesso">
            <p>Cadastro efetuado!</p>
            <p>Faça login para <a href="telalogin.php">acessar</a></p>
        </div>
        <?php
            }
            unset($_SESSION['status_cadastro']);
        ?>
        <?php
            if(isset($_SESSION['email_existe'])){
        ?>
        <div id="jacadastrado">
            <p>E-mail já cadastrado.</p>
        </div>
        <?php
            }
            unset($_SESSION['email_existe']);
        ?>
        <?php
            if(isset($_SESSION['usuario_existe'])){
        ?>
        <div id="userjacadastrado">
            <p>Usuario já cadastrado!.</p>
        </div>
        <?php
            }
            unset($_SESSION['usuario_existe']);
        ?>
        <form action="php/cadastrar.php" method="POST">
            <input name="nome" type="text" class="input is-large" placeholder="Nome" autofocus>
            <input name="usuario" type="text" class="input is-large" placeholder="Usuário">
            <input name="email" type="email" class="input is-large" placeholder="Email">
            <input name="senha" class="input is-large" type="password" placeholder="Senha">
            <a href="telalogin.php">Login</a>
            <input type="submit" value="Cadastrar">
        </form>
    </div>
</body>

</html>