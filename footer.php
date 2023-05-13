<footer>

<div class="upwards">
    <img src="Images/Logo Light.png" class="logo-footer" alt="logo">
    <p class="footerP">
        <?php 
            require_once 'dates.php';
            echo "Aujourd'hui, ". dateToFrench("now" ,"l"). " ". dateToFrench("now" ,"j F Y");
        ?>
        <br>
        <?php
            echo retrieveDate();
        ?>
    </p>
</div>

<div class="middlePart">
    <img src="Images/logo millaut.png" class="img-footer" alt="'Logo Millau">
    <img src="Images/logo millaut.png" class="img-footer" alt="'Logo Millau">
    <img src="Images/logo millaut.png" class="img-footer" alt="'Logo Millau">
    <img src="Images/logo millaut.png" class="img-footer" alt="'Logo Millau">
</div>

<div class="downwards">
    <p class="footerP">mentions légales</p>
</div>

</footer>

<style>

    footer {
        margin: 0;
        display: block;
        background: #392C1E;
        color: #B6AC97;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'MontSerrat', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    .footerP {
        font-size: 13px;
    }
    .upwards, .downwards {
        padding: 1px;
        text-align: center;
    } 
    .logo-footer {
         height: 30px;
    }

    @media screen and (min-width:640px){
        footer {
            font-size:18px;
            display: flex;
        }
        .logo-footer {
            height: 100px;
        }
        .img-footer {
            height: 70px;
        }
    }

</style>