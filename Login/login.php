<?php
$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $con = require_once '../Back/connexion.php';
    
    $sql = sprintf("SELECT * FROM users
                    WHERE email = '%s'",
                   $con->real_escape_string($_POST["email"]));
    
    $result = $con->query($sql);
    
    $user = $result->fetch_assoc();
    
    if ($user) {
        
        if (password_verify($_POST["password"], $user["password"])) {
            
            session_start();
            
            session_regenerate_id();
            
            $_SESSION["user_id"] = $user["id"];
        } if (){
            header("Location: ../Vues/index.php");
            exit;
        } else {
            header("Location: ../Vues/admin.php");
            exit;
        }
    }

    
    $is_invalid = true;
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    
    <h1>Se connecter</h1>
    
    <?php if ($is_invalid): ?>
        <em>Email non valide</em>
    <?php endif; ?>
    
    <form method="post">
        <label for="email">Adresse email</label>
        <input type="email" name="email" id="email"
               value="<?= htmlspecialchars($_POST["email"] ?? "") ?>">
        
        <label for="password">Mot de passe</label>
        <input type="password" name="password" id="password">
        
        <button>Log in</button>
    </form>

    <p><a href="../Login/signup.php">S'inscrire</a>  </p>
</body>
</html>