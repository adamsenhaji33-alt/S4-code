<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CityGuide</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header class="site-header">
        <nav class="navbar-container">
            <a class="brand" href="#home">City<span>Guide</span></a>

            <ul class="nav-menu">
                <li><a class="nav-link" href="#home">Home</a></li>
                <li><a class="nav-link" href="#categories">Explore</a></li>
                <li><a class="nav-link" href="#projects">About us</a></li>
                <li><a class="nav-link" href="#projects">Places</a></li>
                <li><a class="nav-link" href="#projects">Profile</a></li>
            </ul>

            <div class="nav-actions">
                <a class="button button-login" href="#login">Log in</a>
                <a class="button button-primary" href="#signup">Sign up</a>
            </div>
        </nav>
    </header>

    <main id="home">
        <section class="hero-container">
            <h1>Discover the best places <br><span>in your city</span></h1>
            <p>Restaurants, cafés, parks, museums and more ...<br>
                Find amazing places, read reviews and share your experience.</p>

            <div class="hero-actions">
                <a class="button button-primary" href="#projects">Lire les articles</a>
                <a class="button button-light" href="#projects">À propos de moi</a>
            </div>
        </section>

        <section class="categories" id="categories">
            <div class="container">
                 <?php foreach ($categorys as $categorys) : ?>
                <div class="category-list">
                    <a href="#projects" class="category-card"><img src="img/<?=htmlspecialchars($categorys['img'])?>" alt=""><span></span><?= $categorys['formag'] ?></a>
                </div>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="projects-section" id="projects">
            <div class="container">
                <div class="projects-header">
                    <div>
                        <h2>A little inspiration for your next outing</h2>
                        <p>Find a new favorite, plan a day out, or share a place you love.</p>
                    </div>
                </div>

                <div class="projects-grid">
                    <?php foreach ($projes as $projes): ?>
                        <article class="project-card">
                            <small><?= $projes['id'] ?></small>
                            <h3><?= $projes['titre'] ?></h3>
                            <p><?= $projes['contenu'] ?></p>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="container footer-content">
            <h3>CityGuide</h3>
            <ul class="footer-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#categories">Explore</a></li>
                <li><a href="#categories">Categories</a></li>
                <li><a href="#projects">About</a></li>
            </ul>
            <p>2025 CityGuide. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>