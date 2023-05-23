<?php
session_start();
?>
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
    <div class="frontPicture">
        <img src="../photos/background.jpg" class="background-picture" alt="Salade">
        <img src="../photos/m-background.jpg" class="m-background-picture" alt="Salade">

    </div>
    <div class="bloc1">
        <img src="../photos/chef.jpg" class="imgB1" alt='Le Chef'>
        <div class="wrapper">        
            <h2>Le Restaurant</h2>
            <p>
            L’ensemble de l’équipe du restaurant Quai Antique vous reçoit à sa table gastronomique, dans un cadre chic et élégant, autour de plats imaginés et créés et où les sens se rencontrent et prennent vie au fil des saisons.
            <br><br>
            De la mise en bouche jusqu’aux créations gourmandes, en passant par les plats, la cuisine méditerranéenne et gastronomique du chef vous mènera dans un parcours culinaire et créatif.
            <br><br>
            C’est une véritable osmose qui opère entre chaque service, où chaque sens est sollicité. La vue vous offre un amas de couleurs et un équilibre inégalé, l’odorat vous plonge dans un parcours sensoriel et le goût vous transporte d’une saveur à une autre.
            </p>
        </div>

    </div>

    <div class="bloc2">
        <h2>Galerie</h2>
        <div class="group">
            <div class="container">
                <img src="../photos/entree.jpg" class="zoom">
                <div class="middle">
                    <div class="text">Entrées</div>
                </div>
            </div>

            <div class="container">
                <img src="../photos/bowl.jpg" class="zoom">
                <div class="middle">
                    <div class="text">Salades</div>
                </div>
            </div>

            <div class="container">
                <img src="../photos/desert.jpg" class="zoom">
                <div class="middle">
                    <div class="text">Desserts</div>
                </div>
            </div>
        </div>

        <a href="reservation.php"  class="index-button">
            <button type="button">Réserver</button>
        </a>


        </div>


<?php
    include "footer.php";
?>


<script src="script.js"></script>
</body>
</html>