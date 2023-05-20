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
    <?php
        require_once('galerie.php');
        $photos = new Photos();
        $photos = $photos->listerPhotos();
        require_once('vues/liste-gallery.php');  
    ?>
    <div class="bloc2">
        <h2>Galerie</h2>
        <div class="group">

            <div class="container">
            <?php foreach ($photos as $photo): ?>
                <img src="photos/<?= $photo->name ?>" width="500" />
                <div class="text"><?= $photo->title ?></div>
            <?php endforeach; ?>

        <a href="reservation.php" class="index-button">
            <button type="button">Réserver</button>
        </a>


        </div>
    </div>

<?php
    include "footer.php";
?>


<script src="script.js"></script>
</body>
</html>