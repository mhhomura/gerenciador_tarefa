<?php
session_start();
?>

<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <title>To Do List Login </title>
    <link rel="stylesheet" href="./css/estilo.css">
</head>


<body>
    
    <div id="body-form">	
        <img id="img"src="imagens/login/free.png">
        <!-- <h1>Login</h1> -->
        <?php
        if(isset($_SESSION['nao_autenticado'])):
        ?>
        <div id="erro">
        <p>ERROr: Usuário ou senha inválidos!</p>
        </div>
        <?php
        endif;
        unset($_SESSION['nao_autenticado']);
        ?>           
        
        <form action="php/login.php" method="POST">
            <input name="email" name="email" type="email" placeholder="E-mail" autofocus=""maxlength="50">
            <input name="senha" type="password" placeholder="Senha" maxlength="8">
            <a href="cadastro.php">Don't have an account? Sign-up</a>
           <input type="submit" value="Logar">
        </form>
    </div>
               
            
        

</body>

</html>