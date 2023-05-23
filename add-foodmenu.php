<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter</title>
    <link rel="stylesheet" href="admin-style.css">
</head>
<body>
    <?php
       if(isset($_POST['button'])){
           extract($_POST);
           if(isset($menu_title) && isset($formula_title) && isset($formula_description) && isset($formula_price)){
                include_once "connexion.php";
                $req = mysqli_query($con , "INSERT INTO foodmenu VALUES(NULL, '$menu_title', '$formula_title','$formula_description','$formula_price')");
                if($req){
                    header("location: admin.php");
                }else {
                    $message = "Le menu n'a pas pu être ajouté.";
                }

           }else {
               $message = "Veuillez remplir tous les champs !";
           }
       }
    
    ?>
    <div class="form">
        <a href="admin.php" class="back_btn"> Retour</a>
        <h2>Ajouter un menu</h2>
        <p class="erreur_message">
            <?php 
            if(isset($message)){
                echo $message;
            }
            ?>

        </p>
        <form action="" method="POST">
            <label>Nom du menu</label>
            <select type="text" name="menu_title">
                <option value="Midi">Menu du Midi</option>
                <option value="Soir">Menu du Soir</option>
            </select>
            <label>Nom de la formule</label>
            <input type="text" name="formula_title">

            <label>Description de la formule</label>
            <select type="text" name="formula_description">
                <option value="2plats">Entrée + Plat ou Plat + Dessert</option>
                <option value="3plats">Entrée + Plat + Dessert</option>
            </select>

            <label>Prix de la Formule</label>
            <input type="price" name="formula_price">

            <input type="submit" value="Ajouter" name="button">
        </form>
    </div>
</body>
</html>