<?php
    include "header.php";
    include '../Back/resa-process.php';
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

    <div class="title-wrapper">
        <h1>Réservation</h1>
        <p>Vous n'êtes plus qu'à un clic du bonheur gustatif !</p>
    </div>

    <div class="formulaire">

    <form action="" method="POST">
        <div class="wraps">
            <label for="couverts">Nombre de couverts</label>
            <select name="couverts" id="nbrcouverts">
                <option value="2">2 couverts</option>
                <option value="3">3 couverts</option>
                <option value="4">4 couverts</option>
                <option value="5">5 couverts</option>
                <option value="6">6 couverts</option>
            </select>

        <label for="date">Date&nbsp;</label>
            <input type="date" id="date" name="date">
        </div>

        <label for="horaires">Horaires</label>
            <select name="time" id="time">
                <option value="12">12h</option>
                <option value="13">13h</option>
                <option value="19">19h</option>
                <option value="20">20h</option>
            </select>
   
        <div class="wraps">
            <label for="name">Nom</label>
            <input type="text" id="name" name="name">
        </div>

        <div class="wraps">
            <label for="email">E-mail&nbsp;</label>
            <input type="email" id="email" name="email">
        </div>

        <div class="wraps">
            <label for="telephone">Téléphone&nbsp;</label>
            <input type="telephone" id="telephone" name="telephone">
        </div>

        <div>
            <input type="checkbox" id="allergies" name="is_allergic" onclick="showMsg()">
            <label for="allergies">Si vous souffrez d'allergies, merci de préciser.</label>
            <br>
                <textarea id="msg-allergies" name="allergies" style="display:none"></textarea>
        </div>
        <button type="submit" value="Envoyer" name="send">Envoyer</button>
    </form>

    </div>


<?php
    include "footer.php";
?>

<script src="../JS/script.js"></script>

<style>
    .title-wrapper {
        text-align: center;
        padding-bottom: 3em;
    }
    .timesWrap {
        display: flex;
        justify-content: space-around;
    }
    .formulaire {
        display: flex;
        justify-content: center;
    }
    form {
        display: block;
        padding: 3%;
    }
    .wraps {
        display: flex;
        flex-direction: column;
    }
</style>

</body>
</html>