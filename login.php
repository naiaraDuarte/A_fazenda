<?php
    include 'sistema/database.php';
    session_start();

   if(!isset($_SESSION['username'], $_SESSION['id'])) {
        header('Location: index.php');
   }
	    

    if(isset($_POST)) {
        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

        $sql = "SELECT * FROM `usuarios` WHERE `username` = '$username' AND `senha` = '$password'";
        $resultado = execute_query($sql);

        if(isset($resultado)) {
            foreach($resultado as $usuario) {
                if(isset($usuario)){
                    $_SESSION['id'] = $usuario['id'];
                    $_SESSION['username'] = $usuario['username'];
                    $_SESSION['email'] = $usuario['email'];
                    header("Location: index.php");
                } 
            }
        }         
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    Login: <input type="text" name="username" placeholder="Nome de usuário"> <br>
    Senha: <input type="password" name="password" placeholder="Senha"> <br>
    <input type="submit" value="Logar">
    </form>
</body>
</html>