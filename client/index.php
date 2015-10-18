<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Leonis Curiosity</title>
    </head>
    <body>
        <header>
            <ul>
                <li><a href="index.php?page=Home">Accueil</a></li>
                <li><a href="index.php?page=Tas">Trucs à Savoir</a></li>
                <li><a href="index.php?page=Projets">Projets</a></li>
                <li><a href="index.php?page=CmC">Ça Marche Comment?</a></li>
                <li><a href="index.php?page=About">À propos</a></li>
            </ul>
        </header>
        <section id="contexte">
            <?php
            switch ($_GET['page']) {
                case "Tas":
                    echo "C'est la page des trucs à savoir";
                break;
                case "Projets":
                    echo "C'est la page des projets";
                break;
                case "Cmc":
                    echo "C'est la rubrique : ça marche comment?";
                break;
                case "About":
                    echo "C'est la rubrique à propos de moi";
                break;
                default:
                    echo "Accueil";
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
