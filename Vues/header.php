<?php
if (isset($_SESSION["user_id"])) {
    $con = require_once '../Back/connexion.php';   
    $sql = "SELECT * FROM users
            WHERE id = {$_SESSION["user_id"]}";            
    $result = $con->query($sql);  
    $user = $result->fetch_assoc();
}
?>
<header>
    

    <nav class="navbar">
        <a href="index.php" class="nav-branding">
            <img src="..photos/Logos/Logo Light.png" alt="Logo">
        </a>

            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="carte.php" class="nav-link">Carte</a>
                </li>
                <li class="nav-item">
                    <a href="menu.php" class="nav-link">Menu</a>
                </li>
                <li class="nav-item">
                    <a href="galerie.php" class="nav-link">Galerie</a>
                </li>
                <li class="nav-item">
                    <a href="Contact.php" class="nav-link">Contact</a>
                </li>
                <li class="nav-item">
                    <a href="reservation.php" class="nav-link">Réserver</a>
                </li>
                <li class="nav-item">
                <?php if (isset($user)): ?>
                    <a href="../Login/logout.php">Se déconnecter</a>            
                <?php else: ?>            
                    <a href="../Login/login.php">Se connecter</a>         
                <?php endif; ?>
                </li>
            </ul>

            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
    </nav>



</header>
