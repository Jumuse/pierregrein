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

    <h1>Contact</h1>

    <div class="bloc1">
        <div class="wrapper">        
            <h2>Où nous <br> trouver</h2>
            <p>25 Chemin des Camélias <br> 73000 Chambéry</p>
        </div>

    </div>

    <div class="bloc2">
        <h2>Nos horaires d'ouverture</h2>
        <div class="timesWrap">
            <div class="weekDays">
                <p>LUNDI</p>
                <p>MARDI</p>
                <p>MERCREDI</p>
                <p>JEUDI</p>
                <p>VENDREDI</p>
                <p>SAMEDI</p>
                <p>DIMANCHE</p>
            </div>

            <div class="timetable">
                <p><?php require_once 'dates.php';
                echo $weekHours; ?></p>
                <p><?php echo $weekHours; ?></p>
                <p><?php echo $wednesday; ?></p>
                <p><?php echo $weekHours; ?></p>
                <p><?php echo $weekHours; ?></p>
                <p><?php echo $saturdayHours; ?></p>
                <p><?php echo $sundayHours; ?></p>
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
<style>
    .timesWrap {
        display: flex;
        justify-content: space-around;
    }
</style>

</body>
</html>