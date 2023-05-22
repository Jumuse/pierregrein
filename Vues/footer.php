<footer>


<div class="upwards">
    <img src="../photos/Logos/Logo Light.png" class="logo-footer" alt="logo">
    <p class="footerP">
        <?php 
            require_once '../Back/dates.php';
            echo "Aujourd'hui, ". dateToFrench("now" ,"l"). " ". dateToFrench("now" ,"j F Y");
        ?>
        <br>
        <?php
            echo retrieveDate();
        ?>
    </p>
</div>

<div class="middlePart">
    <img src="../photos/Logos/Tripadvisor.png" class="img-footer" alt="'Logo TripAdvisor">
    <img src="../photos/Logos/fb.png" class="img-footer" alt="'Logo Facebook">
    <img src="../photos/Logos/Instagram.png" class="img-footer" alt="'Logo Instagram">
    <img src="../photos/Logos/logo millaut.png" class="img-footer" alt="'Logo Millaut">
</div>

<div class="downwards">
    <p class="footerP">mentions légales</p>
</div>

</footer>
