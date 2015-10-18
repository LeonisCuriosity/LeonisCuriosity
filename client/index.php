<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Leonis Curiosity</title>
        <link rel="stylesheet" href="style.css"></link>
    </head>
    <body>
        <header>
            <ul>
                <li><a href="index.php?page=Home">Accueil</a></li>
                <li><a href="index.php?page=Tas">Trucs à Savoir</a></li>
                <li><a href="index.php?page=Projets">Projets</a></li>
                <li><a href="index.php?page=Cmc">Ça Marche Comment?</a></li>
                <li><a href="index.php?page=About">À propos</a></li>
            </ul>
        </header>
        <section id="contexte">
            <?php
            switch ($_GET['page']) {
                case "Tas":
                    print
                    "<h2 class='title'>Trucs à savoir</h2>
                    <p class='presentation'>
                        Ici, vous allez voir les news, les trucs et les machins
                    </p>";
                break;

                case "Projets":

                break;

                case "Cmc":

                break;

                case "About":

                break;

                default:

            }
            ?>
        </section>
        <footer>
            <div>
                Dernière MAJ: 18/10/15
            </div>
            <a href="#">à propos du site</a>
        </footer>
    </body>
</html>
