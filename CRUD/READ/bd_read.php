<?php
    $dbname = "dbcreate"; // nome do banco de dados
    $dbhost = "localhost";  // local onde está o banco de dados
    $dbuser = "root"; // nome do usuário do bando de dados
    $dbpass =  ""; // senha do usuário do bando de dados
 
    $pdo = new PDO("mysql:dbname=".$dbname.";host:".$dbhost."", "".$dbuser."", $dbpass);

    $nome = $_REQUEST['nome'];
    $telefone = $_REQUEST['telefone'];
	$titulo = $_REQUEST['titulo'];
    $mensagem = $_REQUEST['mensagem'];

    $pdo->query("INSERT INTO `agenda2` (nome, telefone, titulo, mensagem) VALUES ('$nome','$telefone', '$titulo', '$mensagem' )");
    
    $sql = $pdo->query("SELECT * FROM agenda2");

  if($sql->rowCount() > 0) {
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
  }

?>

<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>READ</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">CRUD</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Início<span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>
   <!-- NAVBAR -->

  <main class="container mt-5">
    <div class="bg-light p-5 rounded">
      <h1>Read</h1>

      <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nome</th>
      <th scope="col">Telefone</th>
      <th scope="col">Título</th>
      <th scope="col">Descrição</th>
      <th scope="col">#</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($lista as $agenda2): ?>
    <tr>
      <th scope="row" id="id" name="id"><?php echo $agenda2['id']; ?></th>
      <td><?php echo $agenda2['nome']; ?></td>
      <td><?php echo $agenda2['telefone'];?></td>
      <td><?php echo $agenda2['titulo'];?></td>
      <td><?php echo $agenda2['mensagem'];?></td>
      <td>
        <a href="editar.php" id="editar" name="editar" class="btn btn-warning"> Editar </a>
        <a href="apagar.php" id="apagar" name="apagar" class="btn btn-danger"> Apagar </a></td>
    </tr>
  <?php endforeach; ?> 
  </tbody>
</table>
  </main>
  <!-- BOOTSTRAP -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>