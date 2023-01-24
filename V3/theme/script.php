<?php
    $dbname = "canvas"; // nome do banco de dados
	$dbhost = "localhost";  // local onde está o banco de dados
	$dbuser = "root"; // nome do usuário do bando de dados
    $dbpass =  ""; // senha do usuário do bando de dados

    $pdo = new PDO("mysql:dbname=".$dbname.";host:".$dbhost."", "".$dbuser."", $dbpass);

    $nome = $_REQUEST['user_name'];
	$email = $_REQUEST['user_email'];
    $mensagem = $_REQUEST['user_message'];

    $pdo->query("INSERT INTO `contato` (nome, email, mensagem) VALUES ('$nome', '$email', '$mensagem' )");

    echo "Nome: ". $nome;
    echo "<br/>Email: ". $email;
    echo "<br/>Mensagem: ". $mensagem;


?>
