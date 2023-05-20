<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter</title>
    <link rel="stylesheet" href="../Style/admin-style.css">
</head>
<body>
    <?php
       //vérifier que le bouton ajouter a bien été cliqué
       if(isset($_POST['button'])){
           //extraction des informations envoyé dans des variables par la methode POST
           extract($_POST);
           //verifier que tous les champs ont été remplis
           if(isset($title) && isset($category) && $description && $price && $is_dealt_by){
                //connexion à la base de donnée
                include_once "connexion.php";
                //requête d'ajout
                $req = mysqli_query($con , "INSERT INTO carte VALUES('$title', '$category','$description','$price','$is_dealt_by')");
                if($req){//si la requête a été effectuée avec succès , on fait une redirection
                    header("location: admin.php");
                }else {//si non
                    $message = "Le plat n'a pas pu être ajouté.";
                }

           }else {
               //si non
               $message = "Veuillez remplir tous les champs !";
           }
       }
    
    ?>
    <div class="form">
        <a href="../Vues/admin.php" class="back_btn"> Retour</a>
        <h2>Ajouter un plat</h2>
        <p class="erreur_message">
            <?php 
            // si la variable message existe , affichons son contenu
            if(isset($message)){
                echo $message;
            }
            ?>

        </p>
        <form action="" method="POST">
            <label>Nom du plat</label>
            <input type="text" name="name">
            <label>Catégorie</label>
            <input type="text" name="category">
            <label>Description</label>
            <input type="text" name="description">
            <label>Prix</label>
            <input type="price" name="price">
            <label>Référent administrateur</label>
            <input type="number" name="is_dealt_by">

            <input type="submit" value="Ajouter" name="button">
        </form>
    </div>
</body>
</html>