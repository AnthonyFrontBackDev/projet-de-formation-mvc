<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="public/style/assets/logo_afpa.png" />
    <link rel="stylesheet" href="public/style/style.css" />
    <link rel="stylesheet" href="public/style/queries.css" />

    <title>ecf_php_Alampi</title>
</head>

<body>
    <header>
        <nav>
            <div id="side-bar">
                <div class="toggle-btn" id="toggle-btn">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

                <ul>
                    <li>Accueil</li>
                    <li>Page 1 </li>
                    <li>Page 2 </li>
                    <li>Page 3 </li>
                </ul>
            </div>
        </nav>
        <nav class="navbar">
            <img src="public/style/assets/logo_afpa.png" alt="logo centre de formation">
            <a href="#">Accueil</a>
            <a href="#">Page 1</a>
            <a href="#">Page 2</a>
            <a href="#">Page 3</a>
        </nav>
    </header>

    <main>
        <article>
            <section class="container">

            <?= $nouvelAffichage ?>
                <article>

                    <div class="bloc ">
                        <h2>Article 1</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, nam! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic odio, ex eaque eveniet officia rerum, harum id alias </p>
                    </div>
                </article>

                <article>
                    <div class="bloc">
                        <h2>Article 2</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, nam! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic odio, ex eaque eveniet officia rerum, harum id alias </p>
                    </div>
                </article>

                <article>
                    <div class="bloc">
                        <h2>Article 3</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, nam! Lorem ipsum dolor sit, amet consecteturadipisicing elit. Hic odio, ex eaque eveniet officia rerum, harum id alias </p>
                    </div>
                </article>

                <article>
                    <div id="ancre4" class="bloc">
                        <h2>Article 4</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, nam! Lorem ipsum dolor sit, amet
                            consecteturadipisicing elit. Hic odio, ex eaque eveniet officia rerum, harum id alias </p>
                    </div>
                </article>

                <article>
                    <div id="ancre5" class="bloc">
                        <h2>Article 5</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, nam! Lorem ipsum dolor sit, amet
                            consecteturadipisicing elit. Hic odio, ex eaque eveniet officia rerum, harum id alias </p>
                    </div>
                </article>

                <article>
                    <div id="ancre6" class="bloc">
                        <h2>Article6</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, nam! Lorem ipsum dolor sit, amet
                            consecteturadipisicing elit. Hic odio, ex eaque eveniet officia rerum, harum id alias </p>
                    </div>
                </article>
            </section>
        </article>

        <aside>
            <nav class="link_ancre">
                <h3>Article frequemment lus</h3>
                <a href="#ancre4">Article 4</a>
                <a href="#ancre5">Article 5</a>
                <a href="#ancre6">Article 6</a>
            </nav>

            <div class="computer">
                <img src="public/style/assets/computer.jpg" alt="ordinateur">
            </div>

            <div class="computer">
                <?= $content ?>
            </div>
        </aside>
    </main>

    <footer>
        <div class="footer_link">
            <img src="public/style/assets/logo_afpa.png" alt="">
            <a href="#">CGU</a>
            <span>-</span>
            <a href="#">Mention légales</a>
        </div>
        <p>Copyright © 2022 Alampi Anthony - Tous droits réservés</p>
    </footer>
    <script src="public/js/app.js"></script>
</body>

</html>