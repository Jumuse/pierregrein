<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Restaurant Quai Antique</title>
</head>


<body>
  
    <?php
        include "header.php";
    ?>

    <div class="bloc1">
        <h2>Le Restaurant</h2>
        <p>
            L’ensemble de l’équipe du restaurant Quai Antique vous reçoit à sa table gastronomique, dans un cadre chic et élégant, autour de plats imaginés et créés et où les sens se rencontrent et prennent vie au fil des saisons.
            <br><br>
            De la mise en bouche jusqu’aux créations gourmandes, en passant par les plats, la cuisine méditerranéenne et gastronomique du chef vous mènera dans un parcours culinaire et créatif.
            <br><br>
            C’est une véritable osmose qui opère entre chaque service, où chaque sens est sollicité. La vue vous offre un amas de couleurs et un équilibre inégalé, l’odorat vous plonge dans un parcours sensoriel et le goût vous transporte d’une saveur à une autre.
        </p>
    </div>

    <div class="bloc2">
        <h2>Galerie</h2>
        <div class="group">
            <div class="container">
                <img src="Images/entree.jpg" class="zoom">
                <div class="middle">
                    <div class="text">Nos entrées</div>
                </div>
            </div>

            <div class="container">
                <img src="Images/bowl.jpg" class="zoom">
                <div class="middle">
                    <div class="text">Nos entrées</div>
                </div>
            </div>

            <div class="container">
                <img src="Images/desert.jpg" class="zoom">
                <div class="middle">
                    <div class="text">Nos entrées</div>
                </div>
            </div>
        </div>

        <button>
            RÉSERVER
        </button>
        </div>


<?php
    include "footer.php";
?>



<style>
    body {
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'MontSerrat', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }
    .bloc1, .bloc2 {
        padding-left: 1px;
        padding-right: 1px;
    }

    .bloc1 {
        background: white;
    }

    .bloc2 {
        background: #B6AC97;
    }

    h2 {
        font-size: 42px;
    }

    p {
        font-size: 25px;
    }
    .container {
        position: relative;
    }
    .zoom {
        opacity: 1;
        display: block;
        width: 100%;
        height: auto;
        transition: .5s ease;
        backface-visibility: hidden;
        margin-bottom: 2em;
    }
    .middle {
        transition: .5s ease;
        opacity: 0;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%)
    }

    .container:hover .zoom {
        opacity: 0.3;
    }

    .container:hover .middle {
        opacity: 1;
    }

    .text {
        background-color: #392C1E;
        color: white;
        font-size: 26px;
        padding: 40%;
        font-family: 'Lora', serif;
    }

    @media screen and (min-width:640px){
        .bloc1, .bloc2 {
            padding: 15em;
        }
        .zoom {
            width: 100%;
            display: block;
        }
        .group {
            display: flex;
        }
    }

</style>
</body>
</html>