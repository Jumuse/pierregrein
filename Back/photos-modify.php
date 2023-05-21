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
if(isset($_POST['send'])){
    if(!empty($_FILES['photos']) && isset($_POST['description']) && $_POST['description']!= ""  && isset($_POST['category'])){
        $img_nom = $_FILES['photos']['name'];
        $tmp_nom = $_FILES['photos']['tmp_name'];
        $time = time();
        $nouveau_nom_img = $time.$img_nom ;
        $deplacer_img = move_uploaded_file($tmp_nom,"../photos/".$nouveau_nom_img);

        if($deplacer_img){
            $id = time();
            $category = $_POST['category'];
            $description = $_POST['description'] ;
            $req = mysqli_query($con , "INSERT INTO photos VALUES ('$id' ,'$nouveau_nom_img', '$description', '$category')");
            if($req){
                header("location:../Back/liste-photos.php") ;
            }else {
                $message = "Echec de l'ajout de l'image !";
            }
        }else {
            $message = "Veuillez choisir une image avec une taille inférieur à 1Mo !";
        }
    }else {
        $message = "Veuillez remplir tous les champs !";
    }
}



       if(isset($_POST['button'])){
           extract($_POST);
           if(isset($nouveau_nom_img) && isset($description) && isset($category)){
               $req = mysqli_query($con, "UPDATE photos SET name = '$name', description = '$description', category = '$category' WHERE id = $id");
                if($req){
                    header("location: ../Vues/admin.php");
                }else {
                    $message = "Image non modifiée";
                }
           }else {
               $message = "Veuillez remplir tous les champs !";
           }
       }
    
    ?>

    <div class="form">
        <a href="../Vues/admin.php" class="back_btn">Retour</a>
        <h2>Modifier la photo : <? $row['name']?></h2>
        <p class="erreur_message">
           <?php 
              if(isset($message)){
                  echo $message ;
              }
           ?>
        </p>
        <form action="" method="POST" enctype="multipart/form-data">
            <label>Modifier une photo</label>
            <input type="file" name="photos" value="<? $row['name']?>">
            <label>Description</label>
            <textarea name="description" cols="30" rows="10" value="<?=$row['description']?>"></textarea>
            <label>Catégorie</label>
            <select type="text" name="category" value="<?=$row['category']?>">
                <option value="1">Entrées</option>
                <option value="2">Viandes</option>
                <option value="3">Poissons</option>
                <option value="4">Desserts</option>
            </select>
            <input type="submit" value="Modifier" name="send" href="../Back/liste-photos.php">
        </form>
    </div>
</body>
</html>