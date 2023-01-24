<?php

include('bd_read.php');

 $sql = $pdo->query("SELECT * FROM agenda2");

 $id = filter_input(INPUT_GET, 'id');

 if ($id){

     $sql = $pdo->prepare("DELETE FROM agenda2 WHERE id = :id");
     $sql->bindValue(':id', $id);
     $sql->execute();
   
   }
   
   header("Location: bd_read.php")
?>