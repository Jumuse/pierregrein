<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../Style/footer-style.css" rel="stylesheet" type="text/css" />
    <link href="../Style/header-style.css" rel="stylesheet" type="text/css" />
    <link href="../Style/index-style.css" rel="stylesheet" type="text/css" />
    <title>Restaurant Quai Antique</title>
</head>


<body>
  
    <?php
        include "header.php";
    ?>

    <h1>Les Menus</h1>
    <?php include_once "../Back/connexion.php"; ?>

    <a href="#"  class="index-button">
        <button type="button">Menu du Midi</button>
    </a>
    <a href="#"  class="index-button">
        <button type="button">Menu du Soir</button>
    </a>


    <div class="container premier-container">
    
    <h2>Les formules du Midi</h2>
    <h3>Formule Entrée + Plat ou Plat + Dessert</h3>
    <table>
        <tr id="items">
            <th></th>
            <th></th>
            <th></th>
        </tr>
        <?php 
            $req = mysqli_query($con , "SELECT formula_title, formula_description, formula_price FROM foodmenu WHERE menu_title = 'Midi' AND formula_description = '2plats' ");
            if(mysqli_num_rows($req) == 0){
                echo "Notre chef est en pleine réflexion quant à nos prochaines créations. <br> Elles seront bientôt affichées pour votre plus grand bonheur !" ;
            }else {
                while($row=mysqli_fetch_assoc($req)){
                    ?>
                    <tr>
                        <td><?=$row['formula_title']?></td>
                        <td><?=$row['formula_price']?></td>
                    </tr>
                    <?php
                }
                
            }
        ?>  
    </table>
    </div>

    <h3>Formule Entrée + Plat + Dessert</h3>
    <table>
        <tr id="items">
            <th></th>
            <th></th>
            <th></th>
        </tr>
        <?php 
            $req = mysqli_query($con , "SELECT formula_title, formula_description, formula_price FROM foodmenu WHERE menu_title = 'Midi' AND formula_description = '3plats' ");
            if(mysqli_num_rows($req) == 0){
                echo "Notre chef est en pleine réflexion quant à nos prochaines créations. <br> Elles seront bientôt affichées pour votre plus grand bonheur !" ;
            }else {
                while($row=mysqli_fetch_assoc($req)){
                    ?>
                    <tr>
                        <td><?=$row['formula_title']?></td>
                        <td><?=$row['formula_price']?></td>
                    </tr>
                    <?php
                }
                
            }
        ?>  
    </table>
    </div>


    <div class="container second-container">
    
    <h2>Les formules du Soir</h2>
    <h3>Formule Entrée + Plat ou Plat + Dessert</h3>
    <table>
        <tr id="items">
            <th></th>
            <th></th>
            <th></th>
        </tr>
        <?php 
            $req = mysqli_query($con , "SELECT formula_title, formula_description, formula_price FROM foodmenu WHERE menu_title = 'Soir' AND formula_description = '2plats' ");
            if(mysqli_num_rows($req) == 0){
                echo "Notre chef est en pleine réflexion quant à nos prochaines créations. <br> Elles seront bientôt affichées pour votre plus grand bonheur !" ;
            }else {
                while($row=mysqli_fetch_assoc($req)){
                    ?>
                    <tr>
                        <td><?=$row['formula_title']?></td>
                        <td><?=$row['formula_price']?></td>
                    </tr>
                    <?php
                }
                
            }
        ?>  
    </table>
    </div>

    <h3>Formule Entrée + Plat + Dessert</h3>
    <table>
        <tr id="items">
            <th></th>
            <th></th>
            <th></th>
        </tr>
        <?php 
            $req = mysqli_query($con , "SELECT formula_title, formula_description, formula_price FROM foodmenu WHERE menu_title = 'Soir' AND formula_description = '3plats' ");
            if(mysqli_num_rows($req) == 0){
                echo "Notre chef est en pleine réflexion quant à nos prochaines créations. <br> Elles seront bientôt affichées pour votre plus grand bonheur !" ;
            }else {
                while($row=mysqli_fetch_assoc($req)){
                    ?>
                    <tr>
                        <td><?=$row['formula_title']?></td>
                        <td><?=$row['formula_price']?></td>
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