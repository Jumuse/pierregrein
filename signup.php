<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="signup-process.php" method="post" id="signup" novalidate>
        <div>
            <label for="name">Votre nom</label>
            <input type="text" id="name" name="name">
        </div>
        
        <div>
            <label for="email">Adresse email</label>
            <input type="email" id="email" name="email">
        </div>
        
        <div>
            <label for="password">Mot de passe</label>
            <input type="password" id="password" name="password">
        </div>
        
        <div>
            <label for="password_confirmation">Repeat password</label>
            <input type="password" id="password_confirmation" name="password_confirmation">
        </div>
        
        <button>Créez votre compte</button>
    </form>
</body>
</html>