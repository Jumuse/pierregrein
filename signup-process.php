<?php

if (empty($_POST["name"])) {
    die("Name is required");
}

if ( ! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    die("Valid email is required");
}

if (strlen($_POST["password"]) < 8) {
    die("Password must be at least 8 characters");
}

if ( ! preg_match("/[a-z]/i", $_POST["password"])) {
    die("Password must contain at least one letter");
}

if ( ! preg_match("/[0-9]/", $_POST["password"])) {
    die("Password must contain at least one number");
}

if ($_POST["password"] !== $_POST["password_confirmation"]) {
    die("Passwords must match");
}

$password = password_hash($_POST["password"], PASSWORD_DEFAULT);

$con = require_once 'connexion.php';

$sql = "INSERT INTO users (name, email, password, possesses)
        VALUES (?, ?, ?, 1)";
        
$stmt = $con->stmt_init();

if ( ! $stmt->prepare($sql)) {
    die("SQL error: " . $con->error);
}

$stmt->bind_param("sss",
                  $_POST["name"],
                  $_POST["email"],
                  $password);
                  
if ($stmt->execute()) {

    header("Location: signup-success.php");
    exit;
    
} else {
    
    if ($con->errno === 1062) {
        die("email already taken");
    } else {
        die($con->error . " " . $con->errno);
    }
}
?>