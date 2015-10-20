<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Leonis Curiosity</title>
        <style href="style.css"></style>
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
                    echo "C'est la page des trucs à savoir";
                    print
                    "<h2 class='title'>Trucs à savoir</h2>
                    <p class='presentation'>
                        Ici, vous allez voir les news, mais aussi, des infos diverses et variées qui me tiennent à coeur.
                    </p>
                    <section class="billets">

                    </section>
                    ";
                break;

                case "Projets":
<<<<<<< HEAD
<<<<<<< HEAD
                    print
                    "<h2 class='title'>Projets</h2>
                    <p class='presentation'>
                    Ici, vous allez voir les projet dont je fais partie, et auxquels je contribue.
                    </p>
                    <section class="billets">

                    </section>
                    ";

                break;

                case "Cmc":
                    print
                    "<h2 class='title'>Ça marche comment?</h2>
                    <p class='presentation'>
                        Voici la rubrique des curieux! c'est ici que je posterais des p'tits articles sur le fonctionnements de divers systèmes. En effet, curieux que je suis, je suis souvent ammené à faire des recherches, et je les partagerais ici.
                    </p>
                    <section class="billets">

                    </section>
                    ";

                break;

                case "About":
                    print
                    "<h2 class='title'>À propos de moi</h2>
                        <section class="bio">
                            ipsum lorem ipsumipsum lorem ipsumipsum lorem ipsumipsum lorem ipsumipsum lorem ipsumipsum lorem ipsumipsum lorem ipsumipsum lorem ipsumipsum lorem ipsumipsum lorem ipsumipsum lorem ipsumipsum lorem ipsumipsum lorem ipsumipsum lorem ipsumipsum lorem ipsumipsum lorem ipsumipsum lorem ipsumipsum lorem ipsumipsum lorem ipsumipsum lorem ipsumipsum lorem ipsumipsum lorem ipsumipsum lorem ipsumipsum lorem ipsumipsum lorem ipsumipsum lorem ipsumipsum lorem ipsumipsum lorem ipsumipsum lorem ipsumipsum lorem ipsumipsum lorem ipsumipsum lorem ipsumipsum lorem ipsumipsum lorem ipsumipsum lorem ipsumipsum lorem ipsumipsum lorem ipsum ipsum lorem ipsumipsum lorem ipsumipsum lorem ipsumipsum lorem ipsumipsum lorem ipsumipsum lorem ipsumipsum lorem ipsumipsum lorem ipsumipsum lorem ipsumipsum lorem ipsumipsum lorem ipsumipsum lorem ipsumipsum lorem ipsumipsum lorem ipsumipsum lorem ipsumipsum lorem ipsumipsum lorem ipsumipsum lorem ipsumipsum lorem ipsumipsum lorem ipsumipsum lorem ipsumipsum lorem ipsumipsum lorem ipsumipsum lorem ipsumipsum lorem ipsumipsum lorem ipsumipsum lorem ipsumipsum lorem ipsumipsum lorem ipsumipsum lorem ipsumipsum lorem ipsumipsum lorem ipsumipsum lorem ipsumipsum lorem ipsumipsum lorem ipsumipsum lorem ipsumipsum lorem ipsum.

                            ipsum lorem ipsumipsum lorem ipsumipsum lorem ipsumipsum lorem ipsumipsum lorem ipsumipsum lorem ipsumipsum lorem ipsumipsum lorem ipsumipsum lorem ipsumipsum lorem ipsumipsum lorem ipsumipsum lorem ipsumipsum lorem ipsumipsum lorem ipsumipsum lorem ipsumipsum lorem ipsumipsum lorem ipsumipsum lorem ipsumipsum lorem ipsumipsum lorem ipsum.
                        </section>
                    ";

                break;

                default:
                    print
                    "<h2 class='title'>Accueil</h2>
                    <p class='presentation'>
                        Bienvenue sur LeonisCuriosity.
                    </p>
                    <section id="accueil">

                    </section>
                    ";


=======
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
>>>>>>> parent of 612919e... last of the day
=======
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
>>>>>>> parent of 612919e... last of the day
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
