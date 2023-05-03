<footer>

<div class="upwards">
    <img src="Images/Logo Light.png" class="logo-footer" alt="logo">
    <p>Nous sommes le mardi 2 mai 2023
        <br>
        Le restaurant est ouvert de :
    </p>
</div>

<div class="middle">
    <img src="Images/logo millaut.png" class="img-footer" alt="'Logo Millau">
    <img src="Images/logo millaut.png" class="img-footer" alt="'Logo Millau">
    <img src="Images/logo millaut.png" class="img-footer" alt="'Logo Millau">
    <img src="Images/logo millaut.png" class="img-footer" alt="'Logo Millau">
</div>

<div class="downwards">
    <p>mentions légales</p>
</div>

</footer>

<style>
    body {
        margin: 0;
    }
    footer {
        background: #392C1E;
        color: #B6AC97;
        font-size: 12px;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'MontSerrat', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }
    .upwards, .middle, .downwards {
        display: flex;
        margin: 1%;
    }
    .upwards {
        padding: 1em;
        justify-content: space-around;
        align-items: center;
    } 
    .upwards p {
        text-align: center;
    }
    .middle {
        justify-content: space-evenly;
    }
    .downwards {
        justify-content: center;
    }
    .logo-footer {
         height: 30px;
    }
    .img-footer {
        height: 20px;
    }
    @media screen and (min-width:640px){
        footer {
            font-size:24px;
        }
        .logo-footer {
            height: 100px;
        }
        .img-footer {
            height: 100px;
        }
    }

</style>