<?php
  include_once "connexion.php";
  $id= $_GET['id'];
  $req = mysqli_query($con , "DELETE FROM photos WHERE id = $id");
  header("Location: ../Vues/admin.php")
?>