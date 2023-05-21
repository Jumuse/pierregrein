<?php

function btnCreation() {
    include 'connexion.php';
    $req = mysqli_query($con , "SELECT * FROM timetables");
    $row=mysqli_fetch_assoc($req);

    if(mysqli_num_rows($req) == 0){
    echo "Il n'y a pas encore de plats à ajouter !" ;
    
    } else {
    
        while($row=mysqli_fetch_assoc($req)){
        ?>
        <button>
            <?=$row['opening_time_morning']?>
        </button>
        <button>
            <?=$row['closing_time_morning']?>
        </button>
        <button>
            <?=$row['opening_time_evening']?>
        </button>
        <button>
            <?=$row['closing_time_evening']?>
        </button>
        </button>
        <?php 
    }
    
    }
};

$creneauResa = $row['day_id'].$row['hour'];