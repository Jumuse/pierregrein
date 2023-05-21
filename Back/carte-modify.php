<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier</title>
    <link rel="stylesheet" href="../Style/admin-style.css">
</head>
<body>
<?php

          include_once "connexion.php";
          $id = $_GET['id'];
          $req = mysqli_query($con , "SELECT * FROM carte WHERE id = $id");
          $row = mysqli_fetch_assoc($req);

       if(isset($_POST['button'])){
           extract($_POST);
           if(isset($title) && isset($category) && isset($description) && isset($price)){
               $req = mysqli_query($con, "UPDATE carte SET title = '$title' , category = '$category' , description = '$description', price = '$price' WHERE id = $id");
                if($req){
                    header("location: ../Vues/admin.php");
                }else {
                    $message = "Plat non modifié";
                }

           }else {
               $message = "Veuillez remplir tous les champs !";
           }
       }
    
    ?>

    <div class="form">
        <a href="../Vues/admin.php" class="back_btn">Retour</a>
        <h2>Modifier le plat : <?=$row['title']?> </h2>
        <p class="erreur_message">
           <?php 
              if(isset($message)){
                  echo $message ;
              }
           ?>
        </p>
        <form action="" method="POST">
            <label>Nom du plat</label>
            <input type="text" name="title" value="<?=$row['title']?>">
            <label>Catégorie</label>

            <select type="text" name="category" value="<?=$row['category']?>">
                <option value="Entrees">Entrées</option>
                <option value="Viandes">Viandes</option>
                <option value="Poissons">Poissons</option>
                <option value="Desserts">Desserts</option>
            </select>
            <label>Description</label>
            <input type="text" name="description" value="<?=$row['description']?>">
            <label>Prix</label>
            <input type="integer" name="price" value="<?=$row['price']?>">
            <input type="submit" value="Modifier" name="button">
        </form>
    </div>
</body>
</html>