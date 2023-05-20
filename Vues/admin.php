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
        <a href="../Back/add-meal.php" class="Btn_add"> <img src="../photos/Logos/plus.png"> Ajouter</a>
        
        <table>
            <tr id="items">
                <th>Nom du plat</th>
                <th>Catégorie</th>
                <th>Description</th>
                <th>Prix</th>
                <th>Référent administrateur</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
            <?php 
                //inclure la page de connexion
                include_once "../Back/connexion.php";
                //requête pour afficher la liste des plats
                $req = mysqli_query($con , "SELECT * FROM carte");
                if(mysqli_num_rows($req) == 0){
                    //s'il n'existe pas de plat dans la base de données , alors on affiche ce message :
                    echo "Il n'y a pas encore de plats à ajouter !" ;
                    
                }else {
                    while($row=mysqli_fetch_assoc($req)){
                        ?>
                        <tr>
                            <td><?=$row['title']?></td>
                            <td><?=$row['category']?></td>
                            <td><?=$row['description']?></td>
                            <td><?=$row['price']?></td>
                            <td><?=$row['is_dealt_by']?></td>
                            <!--Relation avec clé primaire title pour modification et suppression -->
                            <td><a href="../Back/carte-modify.php?id=<?=$row['id']?>"><img src="../photos/Logos/pen.png"></a></td>
                            <td><a href="../Back/carte-suppression.php?id=<?=$row['id']?>" onclick="return(confirm('Confirmez-vous la suppression ?'));"><img src="../photos/Logos/bin.png"></a></td>
                        </tr>
                        <?php
                    }
                    
                }
            ?>
      
         
        </table>

<div class="container">
    <div class="carteModif">
        <h2>Modifier la Carte</h2>
    </div>
</div>


<div class="container">
    <div class="menusModif">
        <h2>Modifier les Menus et Formules</h2>
    </div>
</div>


<div class="container">
    <div class="resaCheck">
        <h2>Voir les réservations</h2>
    </div>
</div>



<script>

</script>

</body>



</html>