<footer>


<div class="upwards">
    <img src="Images/Logos/Logo Light.png" class="logo-footer" alt="logo">
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
    <img src="Images/Logos/Tripadvisor.png" class="img-footer" alt="'Logo Millau">
    <img src="Images/Logos/fb.png" class="img-footer" alt="'Logo Millau">
    <img src="Images/Logos/Instagram.png" class="img-footer" alt="'Logo Millau">
    <img src="Images/Logos/logo millaut.png" class="img-footer" alt="'Logo Millau">
</div>

<div class="downwards">
    <p class="footerP">mentions légales</p>
</div>

</footer>
