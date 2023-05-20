<?php

$couverts = $_POST["couverts"];
$user_date = $_POST["user_date"];
$user_time = $_POST["user_time"];
$user_name = $_POST["user_name"];
$user_mail = $_POST["user_mail"];
$user_telephone = $_POST["user_telephone"];
$is_allergic = filter_input(INPUT_POST, "is_allergic", FILTER_VALIDATE_BOOL);
$allergies = $_POST["allergies"];


if (ISSET($user_name)) {
    var_dump($user_name, $user_mail, $is_allergic);
} else {
    echo "Veuillez rentrer votre nom.";
};



