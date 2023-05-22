<?php
$couverts=$_POST['couverts'];
       $date=$_POST['date'];
       $time=$_POST['time'];
       $name=$_POST['name'];
       $email=$_POST['email'];
       $telephone=$_POST['telephone'];
       $is_allergic=$_POST['is_allergic'];
       $allergies=$_POST['allergies'];
       
       try{
           //On se connecte à la BDD
           $pdo = new PDO("mysql:host=localhost;dbname=restaurant", 'root','root');
           $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           //On insère les données reçues
           $sth = $pdo->prepare("INSERT INTO reservation (couverts, date, time, name, email, telephone, is_allergic, allergies) VALUES(:couverts, :date, :time, :name, :email, :telephone, :is_allergic, :allergies)");
           $sth->bindParam(':couverts',$couverts);
           $sth->bindParam(':date',$date);
           $sth->bindParam(':time',$time);
           $sth->bindParam(':name',$name);
           $sth->bindParam(':email',$email);
           $sth->bindParam(':telephone',$telephone);
           $sth->bindParam(':is_allergic',$is_allergic);
           $sth->bindParam(':allergies',$allergies);
           $sth->execute();
           
           echo '<h4>Votre réservation a bien été enregistrée !</h4>';
       }
       catch(PDOException $e){
           echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
       }
   ?>