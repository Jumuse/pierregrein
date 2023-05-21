<?php
$con = require_once '../Back/connexion.php';
$is_admin = mysqli_query($con, "SELECT user_id FROM admin WHERE is_admin = true");
if ($is_admin) {
    session_start();           
    session_regenerate_id();
} else {
    header("Location: ../Login/login.php");
    exit;
};

include '../Vues/header.php';
include_once "../Back/connexion.php";


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
    };
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Quai Antique</title>
    <link rel="stylesheet" href="../Style/admin-style.css">
</head>


<body>
  
<h1>Bienvenue, Admin</h1>

<div class="container">
    <h2>Modifier la Carte</h2>
        <a href="../Back/add-meal.php" class="Btn_add"> <img src="../photos/Logos/plus.png"> Ajouter</a>
        
        <table>
            <tr id="items">
                <th>Nom du plat</th>
                <th>Catégorie</th>
                <th>Description</th>
                <th>Prix</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
            <?php 
                include_once "../Back/connexion.php";
                $req = mysqli_query($con , "SELECT * FROM carte");
                if(mysqli_num_rows($req) == 0){
                    echo "Il n'y a pas encore de plats à ajouter !" ;
                    
                }else {
                    while($row=mysqli_fetch_assoc($req)){
                        ?>
                        <tr>
                            <td><?=$row['title']?></td>
                            <td><?=$row['category']?></td>
                            <td><?=$row['description']?></td>
                            <td><?=$row['price']?></td>

                            <td><a href="../Back/carte-modify.php?id=<?=$row['id']?>"><img src="../photos/Logos/pen.png"></a></td>
                            <td><a href="../Back/carte-suppression.php?id=<?=$row['id']?>" onclick="return(confirm('Confirmez-vous la suppression ?'));"><img src="../photos/Logos/bin.png"></a></td>
                        </tr>
                        <?php
                    }
                    
                }
            ?>
      
         
        </table>

    <div class="container">
        <h2>Modifier les Menus et Formules</h2>
        <a href="../Back/add-foodmenu.php" class="Btn_add"> <img src="../photos/Logos/plus.png"> Ajouter</a>
        
        <table>
            <tr id="items">
                <th>Nom du Menu</th>
                <th>Formule</th>
                <th>Description</th>
                <th>Prix</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
            <?php 

                $req = mysqli_query($con , "SELECT * FROM foodmenu");
                if(mysqli_num_rows($req) == 0){
                    echo "Il n'y a pas encore de plats à ajouter !" ;
                    
                }else {
                    while($row=mysqli_fetch_assoc($req)){
                        ?>
                        <tr>
                            <td><?=$row['menu_title']?></td>
                            <td><?=$row['formula_title']?></td>
                            <td><?=$row['formula_description']?></td>
                            <td><?=$row['formula_price']?></td>

                            <td><a href="../Back/foodmenu-modify.php?id=<?=$row['id']?>"><img src="../photos/Logos/pen.png"></a></td>
                            <td><a href="../Back/foodmenu-suppression.php?id=<?=$row['id']?>" onclick="return(confirm('Confirmez-vous la suppression ?'));"><img src="../photos/Logos/bin.png"></a></td>
                        </tr>
                        <?php
                    }
                    
                }
            ?>
      
         
        </table>

<div class="container">
    <h2>Modifier les photos de la galerie</h2>
    <a href="../Back/liste-photos.php" class="link">Liste des photos</a>
    <table>
        <tr id="items">
            <th>Nom de l'image</th>
            <th>Description</th>
            <th>Catégorie</th>
            <th>Modifier</th>
            <th>Supprimer</th>

            <?php 

                $req = mysqli_query($con , "SELECT * FROM photos");
                if(mysqli_num_rows($req) == 0){
                    echo "La base de données photos est vide !" ;
                    
                }else {
                    while($row=mysqli_fetch_assoc($req)){
                        ?>
                        <tr>
                            <td><?=$row['name']?></td>
                            <td><?=$row['description']?></td>
                            <td><?=$row['category']?></td>

                            <td><a href="../Back/photos-modify.php?id=<?=$row['id']?>"><img src="../photos/Logos/pen.png"></a></td>
                            <td><a href="../Back/photos-suppression.php?id=<?=$row['id']?>" onclick="return(confirm('Confirmez-vous la suppression ?'));"><img src="../photos/Logos/bin.png"></a></td>
                        </tr>
                        <?php
                    }
                    
                }
            ?>

    </table>


        <p class="error">
            <?php 
            if(isset($message)) echo $message ;
            ?>
        </p>
        <form action="" method="POST" enctype="multipart/form-data"> 
            <label>Ajouter une photo</label>
            <input type="file" name="photos">
            <label>Description</label>
            <textarea name="description" cols="30" rows="10"></textarea>
            <label>Catégorie</label>
            <select type="text" name="category">
                <option value="1">Entrées</option>
                <option value="2">Viandes</option>
                <option value="3">Poissons</option>
                <option value="4">Desserts</option>
            </select>
            
            <input type="submit" value="Ajouter" name="send" href="../Back/liste-photos.php">
                     
        </form>
    </div>

<div class="container">
    <div class="resaCheck">
        <h2>Voir les réservations</h2>
        <a href="../Back/add-foodmenu.php" class="Btn_add"> <img src="../photos/Logos/plus.png"> Ajouter</a>
        
        <table>
            <tr id="items">
                <th>Nombre de couverts</th>
                <th>Date</th>
                <th>Nom</th>
                <th>Email</th>
                <th>Téléphone</th>
                <th>Supprimer</th>
            </tr>
            <?php 

                $req = mysqli_query($con , "SELECT * FROM reservation");
                if(mysqli_num_rows($req) == 0){
                    echo "Il n'y a aucune réservation enregistrée !" ;
                    
                }else {
                    while($row=mysqli_fetch_assoc($req)){
                        ?>
                        <tr>
                            <td><?=$row['couverts']?></td>
                            <td><?=$row['date']?></td>
                            <td><?=$row['name']?></td>
                            <td><?=$row['email']?></td>
                            <td><?=$row['telephone']?></td>

                            <td><a href="../Back/resa-suppression.php?id=<?=$row['id']?>" onclick="return(confirm('Confirmez-vous la suppression ?'));"><img src="../photos/Logos/bin.png"></a></td>
                        </tr>
                        <?php
                    }
                    
                }
            ?>
      
         
        </table>
    </div>
</div>



<script>

</script>

</body>



</html>