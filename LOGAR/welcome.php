<?php
// Inicialize a sessão
session_start();
 
// Verifique se o usuário está logado, se não, redirecione-o para uma página de login
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <h1 class="my-5">Eai meu chapa, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Seja bem vindo ao nosso site e ao arquivo welcome.php.</h1>
    <p>
        <a href="index.php" class="btn btn-warning">Index</a>
        <a href="logout.php" class="btn btn-danger ml-3">Logout</a>
    </p>
</body>
</html>