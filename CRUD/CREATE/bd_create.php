<?php

    $dbname = "dbcreate"; // nome do banco de dados
	$dbhost = "localhost";  // local onde está o banco de dados
	$dbuser = "root"; // nome do usuário do bando de dados
    $dbpass =  ""; // senha do usuário do bando de dados

    $pdo = new PDO("mysql:dbname=".$dbname.";host:".$dbhost."", "".$dbuser."", $dbpass);

    $nome = $_REQUEST['nome'];
	$titulo = $_REQUEST['titulo'];
    $mensagem = $_REQUEST['mensagem'];

    $pdo->query("INSERT INTO `agenda` (nome, titulo, mensagem) VALUES ('$nome', '$titulo', '$mensagem' )");

    echo "Dados Salvos com sucesso";

?>

<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>READ</title>
  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/navbar-fixed/">
  <link href="./assets/bootstrap.min.css" rel="stylesheet">
  <link href="navbar-top-fixed.css" rel="stylesheet">
</head>

<body>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark ">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">CRUD</a>
    </div>
   </nav>

  <main class="container mt-5">
    <div class="bg-light p-5 rounded">
      <h1>Read</h1>

      <table class="table">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Telefone</th>
      <th scope="col">Título</th>
      <th scope="col">Descrição</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($lista as $agenda2): ?>
    <tr>
      <th scope="row"><?php echo $agenda2['nome']; ?></th>
      <td><?php echo $agenda2['telefone'];?></td>
      <td><?php echo $agenda2['titulo'];?></td>
      <td><?php echo $agenda2['mensagem'];?></td>
      <td>
        <a href="#" class="btn btn-warning"> Editar </a>
        <a href="#" class="btn btn-danger"> Apagar </a></td>
    </tr>
  <?php endforeach; ?> 
  </tbody>
</table>
  </main>
  <script src="/CRUD_unipe/assets/bootstrap.bundle.min.js"></script>
</body>

</html>