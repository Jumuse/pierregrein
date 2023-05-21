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
          $req = mysqli_query($con , "SELECT * FROM foodmenu WHERE id = $id");
          $row = mysqli_fetch_assoc($req);

       if(isset($_POST['button'])){
           extract($_POST);
           if(isset($menu_title) && isset($formula_title) && isset($formula_description) && isset($formula_price)){
               $req = mysqli_query($con, "UPDATE foodmenu SET menu_title = '$menu_title' , formula_title = '$formula_title' , formula_description = '$formula_description', formula_price = '$formula_price' WHERE id = $id");
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
        <h2>Modifier le menu : <?=$row['menu_title']?> </h2>
        <p class="erreur_message">
           <?php 
              if(isset($message)){
                  echo $message ;
              }
           ?>
        </p>
        <form action="" method="POST">
            <label>Nom du menu</label>
            <select type="text" name="menu_title" value="<?=$row['menu_title']?>">
                <option value="Midi">Menu du Midi</option>
                <option value="Soir">Menu du Soir</option>
            </select>

            <label>Nom de la formule</label>
            <input type="text" name="formula_title" value="<?=$row['formula_title']?>">

            <label>Description de la formule</label>
            <select type="text" name="formula_description" value="<?=$row['formula_description']?>">
                <option value="2plats">Entrée + Plat ou Plat + Dessert</option>
                <option value="3plats">Entrée + Plat + Dessert</option>
            </select>


            <label>Prix de la formule</label>
            <input type="integer" name="formula_price" value="<?=$row['formula_price']?>">
            <input type="submit" value="Modifier" name="button">
        </form>
    </div>
</body>
</html>