<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter</title>
    <link rel="stylesheet" href="../Style/admin-style.css">
</head>
<body>
    <?php
       if(isset($_POST['button'])){
           extract($_POST);
           if(isset($couverts) && isset($date) && isset($email) && isset($telephone)){
                include_once "connexion.php";
                $req = mysqli_query($con , "INSERT INTO reservation VALUES(NULL, '$couverts', '$date','$name','$email', '$telephone')");
                if($req){
                    echo 'Merci pour votre réservation.';
                }else {
                    $message = "Le plat n'a pas pu être ajouté.";
                }
           }else {
               $message = "Veuillez remplir tous les champs !";
           }
       }
    
    ?>

</body>
</html>