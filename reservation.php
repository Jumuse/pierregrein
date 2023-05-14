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

    <div class="title-wrapper">
        <h1>Réservation</h1>
        <p>Vous n'êtes plus qu'à un clic du bonheur gustatif !</p>
    </div>

    <div class="formulaire">

    <form action="#" method="post">
        <div>
        <select name="couverts" id="nbrcouverts">
            <option value="two">2 couverts</option>
            <option value="three">3 couverts</option>
            <option value="four">4 couverts</option>
            <option value="five">5 couverts</option>
            <option value="six">6 couverts</option>
        </select>

        <label for="date">date&nbsp;:</label>
            <input type="date" id="date" name="user_date">
        </div>
        
        <div>
            <label for="time">heure&nbsp;:</label>
            <input type="time" id="time" name="user_time">
        </div>
        
        
        <div>
            <label for="name">Nom :</label>
            <input type="text" id="name" name="user_name">
        </div>

        <div>
            <label for="mail">e-mail&nbsp;:</label>
            <input type="email" id="mail" name="user_mail">
        </div>

        <div>
            <label for="telephone">téléphone&nbsp;:</label>
            <input type="telephone" id="telephone" name="user_telephone">
        </div>

        <div>
        <input type="checkbox" id="allergies" name="allergies">
        <label for="allergies">Si vous souffrez d'allergies, merci de préciser le ou les aliments que vous ne pouvez pas consommer :</label>
        <br>
            <textarea id="msg-allergies" name="user_allergies"></textarea>
        </div>
        <input type="button" value="Envoyer">
    </form>

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