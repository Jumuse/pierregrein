<?php
include 'connexion.php';
include 'horaires.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resa test</title>
</head>
<body>
    <form>
        <div>Créneau
            <label>Midi</label>
            <? require_once 'horaires.php' ?>
            <label>Soir</label>
        </div>

    </form>
</body>
</html>