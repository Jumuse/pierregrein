<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="Style/footer-style.css" rel="stylesheet" type="text/css" />
    <link href="Style/header-style.css" rel="stylesheet" type="text/css" />
    <link href="Style/index-style.css" rel="stylesheet" type="text/css" />
    <title>Restaurant Quai Antique</title>
</head>


<body>
  
    <?php
        include "header.php";
    ?>

    <h1>La Carte</h1>

    <div class="container-menus">
    
        <h2>Les Entrées</h2>
        
        <table>
            <tr id="items">
                <th>Nom du plat</th>
                <th>Description</th>
                <th>Prix</th>
            </tr>
            <?php 
                include_once "Back/connexion.php";
                $req = mysqli_query($con , "SELECT title, description, price FROM carte WHERE category = 'Entrées'");
                if(mysqli_num_rows($req) == 0){
                    echo "Notre chef est en pleine réflexion quant à nos prochaines créations. <br> Elles seront bientôt affichées pour votre plus grand bonheur !" ;
                }else {
                    while($row=mysqli_fetch_assoc($req)){
                        ?>
                        <tr>
                            <td><?=$row['title']?></td>
                            <td><?=$row['description']?></td>
                            <td><?=$row['price']?></td>
                        </tr>
                        <?php
                    }
                    
                }
            ?>  
        </table>
    </div>


    <div class="container-menus">
    
    <h2>Les Viandes</h2>
    
    <table>
        <tr id="items">
            <th>Nom du plat</th>
            <th>Description</th>
            <th>Prix</th>
        </tr>
        <?php 
            $req = mysqli_query($con , "SELECT title, description, price FROM carte WHERE category = 'Viandes'");
            if(mysqli_num_rows($req) == 0){
                echo "Notre chef est en pleine réflexion quant à nos prochaines créations. <br> Elles seront bientôt affichées pour votre plus grand bonheur !" ;
            }else {
                while($row=mysqli_fetch_assoc($req)){
                    ?>
                    <tr>
                        <td><?=$row['title']?></td>
                        <td><?=$row['description']?></td>
                        <td><?=$row['price']?></td>
                    </tr>
                    <?php
                }
                
            }
        ?>  
    </table>
</div>

    <div class="container-menus">
    
    <h2>Les Poissons</h2>
    
    <table>
        <tr id="items">
            <th>Nom du plat</th>
            <th>Description</th>
            <th>Prix</th>
        </tr>
        <?php 
            $req = mysqli_query($con , "SELECT title, description, price FROM carte WHERE category = 'Poissons'");
            if(mysqli_num_rows($req) == 0){
                echo "Notre chef est en pleine réflexion quant à nos prochaines créations. <br> Elles seront bientôt affichées pour votre plus grand bonheur !" ;
            }else {
                while($row=mysqli_fetch_assoc($req)){
                    ?>
                    <tr>
                        <td><?=$row['title']?></td>
                        <td><?=$row['description']?></td>
                        <td><?=$row['price']?></td>
                    </tr>
                    <?php
                }
                
            }
        ?>  
    </table>
</div>

<div class="container-menus">
    
    <h2>Les Desserts</h2>
    
    <table>
        <tr id="items">
            <th>Nom du plat</th>
            <th>Description</th>
            <th>Prix</th>
        </tr>
        <?php 
            $req = mysqli_query($con , "SELECT title, description, price FROM carte WHERE category = 'Desserts'");
            if(mysqli_num_rows($req) == 0){
                echo "Notre chef est en pleine réflexion quant à nos prochaines créations. <br> Elles seront bientôt affichées pour votre plus grand bonheur !" ;
            }else {
                while($row=mysqli_fetch_assoc($req)){
                    ?>
                    <tr>
                        <td><?=$row['title']?></td>
                        <td><?=$row['description']?></td>
                        <td><?=$row['price']?></td>
                    </tr>
                    <?php
                }
                
            }
        ?>  
    </table>
</div>

<?php
    include "footer.php";
?>


<script src="script.js"></script>
</body>
</html>