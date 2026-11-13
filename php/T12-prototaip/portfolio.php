<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Prototype </title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header class="en-tete-site">
        <nav class="barre-navigation">
            <a href="index.html" class="logo">
                <span class="logo-sombre">Ciyt</span><span class="logo-couleur">Guide</span>
            </a>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Explore </a></li>
                <li><a href="#"> abute us</a></li>
                <li><a href="#">ad plise</a></li>
                <li><a href="#">your profile</a></li>
            </ul>
            <a href="#" class="bouton-principal">Sign up</a>
        </nav>
    </header>
    <section class="banniere-accueil">
        <h1>Bonjour, je suis <br><span> Adam &amp;Développer </span></h1>
        <p>Étudiant en programmation, passionné par l'IA,
            e développement web et les nouvelles technologies.</p>
        <div class="actions-banniere">
            <a href="#articles" class="bouton-principal">Lire les articles</a>
            <a href="#" class="bouton-secondaire">À propos de moi</a>
        </div>
        <img src="img/pf.jpeg" alt="img">
    </section>
    <section class="filtre-categories">
        <h2>my expérience</h2>
        <div class="liste-filtres">
            <a href="#" class="worke">JS</a>
            <a href="#" class="worke">HTml:5</a>
            <a href="#" class="worke">CSS</a>
            <a href="#" class="worke">Dsine</a>
        </div>
    </section>
    <section id="articles" class="section-articles">
        <div class="conteneur-articles">
            <div class="entete-liste-articles">
                <div>
                    <h2>Mes projes</h2>
                    <p>Les peroge les plus récents de la communauté.</p>
                </div>
                <a href="#" class="lien-voir-tout">Explore</a>
            </div>
            <div class="grille-articles">

                <?php foreach ($projes as $projes): ?>
                    <div class="carte-article">
                        <h3><?= $projes['titre'] ?></h3>
                        <p><?= $projes['contenu'] ?></p>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    </section>
</body>

</html>