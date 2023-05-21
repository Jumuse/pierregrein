<?php
  include_once "connexion.php";
  $id= $_GET['id'];
  $req = mysqli_query($con , "DELETE FROM foodmenu WHERE id = $id");
  header("Location: ../Vues/admin.php")
?>