<?php

$con = require __DIR__ . "../Back/connexion.php";

$sql = sprintf("SELECT * FROM users
                WHERE email = '%s'",
                $con->real_escape_string($_GET["email"]));
                
$result = $con->query($sql);

$is_available = $result->num_rows === 0;

header("Content-Type: application/json");

echo json_encode(["available" => $is_available]);