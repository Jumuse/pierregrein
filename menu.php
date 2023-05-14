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

    <h1>Les Menus</h1>

    <a href="#"  class="index-button">
        <button type="button">Menu du Midi</button>
    </a>
    <a href="#"  class="index-button">
        <button type="button">Menu du Soir</button>
    </a>

    <div class="menuWrapper">
        <div class="menuMidiWrapper">
            <h2>MENU DU MIDI</h2>
            <div class="formule1midi">
                <h3>Formule 1</h3>
                <p>Price</p>
                <br>
                <p>PLAT1</p>
                <p>PLAT2</p>
                <hr>
                <p>PLAT3</p>
                <p>PLAT4</p>
                <hr>
                <p>PLAT5</p>
                <p>PLAT6</p>
                <p>PLAT7</p>
            </div>

            <div class="formule2midi">
                <h3>Formule 2</h3>
                <p>Price</p>
                <br>
                <p>PLAT1</p>
                <p>PLAT2</p>
                <hr>
                <p>PLAT3</p>
                <p>PLAT4</p>
                <hr>
                <p>PLAT5</p>
                <p>PLAT6</p>
                <p>PLAT7</p>
            </div>
        </div>

        <h2>MENU DU SOIR</h2>
            <div class="formule1soir">
                <h3>Formule 1</h3>
                <p>Price</p>
                <br>
                <p>PLAT1</p>
                <p>PLAT2</p>
                <hr>
                <p>PLAT3</p>
                <p>PLAT4</p>
                <hr>
                <p>PLAT5</p>
                <p>PLAT6</p>
                <p>PLAT7</p>
            </div>

            <div class="formule2soir">
                <h3>Formule 2</h3>
                <p>Price</p>
                <br>
                <p>PLAT1</p>
                <p>PLAT2</p>
                <hr>
                <p>PLAT3</p>
                <p>PLAT4</p>
                <hr>
                <p>PLAT5</p>
                <p>PLAT6</p>
                <p>PLAT7</p>
            </div>
        </div>



    </div>


<?php
    include "footer.php";
?>


<script src="script.js"></script>
</body>
</html>