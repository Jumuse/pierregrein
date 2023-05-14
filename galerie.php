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

    <div class="bloc2">
        <h2>Galerie</h2>
        <div class="group">
            <div class="container">
                <img src="Images/entree.jpg" class="zoom" alt="Tomates Mozzarella">
                <div class="middle">
                    <div class="text">Tomates Mozzarella</div>
                </div>
            </div>

            <div class="container">
                <img src="Images/bowl.jpg" class="zoom" alt="Ballade Champêtre">
                <div class="middle">
                    <div class="text">Ballade Champêtre</div>
                </div>
            </div>

            <div class="container">
                <img src="Images/cake.jpg" class="zoom" alt="Tiramisu revisité">
                <div class="middle">
                    <div class="text">Tiramisu revisité</div>
                </div>
            </div>

            <div class="container">
                <img src="Images/desert.jpg" class="zoom" alt="Suprême chocolaté">
                <div class="middle">
                    <div class="text">Suprême chocolaté</div>
                </div>
            </div>
        </div>

        <a href="reservation.php" class="index-button">
            <button type="button">Réserver</button>
        </a>


        </div>


<?php
    include "footer.php";
?>


<script src="script.js"></script>
</body>
</html>