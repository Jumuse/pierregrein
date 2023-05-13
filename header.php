<header>
    <img src="Images/Logos/Logo Light.png" alt="Logo">

    <nav role="navigation">
        <div id="menuFullScreen">
            <a href="#">Carte</a>
            <a href="#">Menu</a>
            <a href="#">Galerie</a>
            <a href="#">Contact</a>
            <a href="#">Réserver</a>
            <a href="#">Se connecter</a>
        </div>
    </nav>

</header>

<style>

    header {
        background: #392C1E;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    img {
        height: 30px;
    }
    #menuFullScreen {
        display: none;
    }

    @media screen and (min-width:640px){
        #menuFullScreen {
            display: flex;
        }
    }
    @media screen and (min-width:640px){
        header {
            padding: 5em;
        }
        img {
            height: 120px;
        }

        a {
            padding-left: 2em;
            font-size: 25px;
            text-decoration: none;
            color: #B6AC97;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'MontSerrat', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
        a:hover {
            color: #906427;
        }
        a:active {
            color: #906427;
            text-decoration: underline;
        }
    }
</style>