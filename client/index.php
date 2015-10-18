<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Leonis Curiosity</title>
    </head>
    <body>
        <header>
            <ul>
                <li><a href="?page=Home">Accueil</a></li>
                <li><a href="?page=IUOP">IUOP</a></li>
                <li><a href="?page=Projets">Projets</a></li>
                <li><a href="?page=CmC">ÇmC?</a></li>
                <li><a href="?page=About">À propos</a></li>
            </ul>
        </header>
        <section id="contexte">
            <?php
                echo "$page";
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
