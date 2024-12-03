<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- === Montserrat === -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!-- === Poppins === -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- === Oswald === -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Lien vers les pages CSS -->
    <link rel="stylesheet" href="cssMTL/header.css">
    <link rel="stylesheet" href="cssMTL/homePage.css">

    <title>home page</title>
</head>
<body>
    <main>
        <?php require_once(__DIR__ . '/header.php') ?>

        <section class="hero-section">
                <img src="image/diplome.jpg" class="diplome" alt="photo de diplomée">
            <div class="content">
                <h1>Vous êtes enfin prêt à organiser le grand jour.</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
                <div class="boutonContact">Contactez-nous</div>
            </div>
        </section>

        <section class="quiSommeNous">
            <img src="image/eleveDiplome.jpg" class="diplomeEleve" alt="etudiant diplomée" >
            <aside>
                <h2>qui somme-nous ?</h2>

                <h3>Rapide</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>

                <h3>Economique</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>

                <h3>Sécuritaire</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
            </aside>

            <div class="reussiteQuebec">
                <h2>Réussite éducative Québec</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>


                <div class="boutonCampagne">
                    <a href="campagne.php">Campagne 2024</a>
                </div>
            </div>
        </section>

        <section>
            <div class="textePresentation">
                <h2>Crée des souvenir impérissables</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="carousel-container">
                <button class="carousel-btn prev" onclick="prevSlide()">&#10094;</button>
                <div class="carousel-track">
                    <img src="image/image1.jpg" alt="Image 1" class="carousel-image">
                    <img src="image/image2.jpg" alt="Image 2" class="carousel-image">
                    <img src="image/image3.jpg" alt="Image 3" class="carousel-image">
                    <img src="image/image4.jpg" alt="Image 4" class="carousel-image">
                    <img src="image/image5.jpg" alt="Image 5" class="carousel-image">
                </div>
                <button class="carousel-btn next" onclick="nextSlide()">&#10095;</button>
            </div>
            <script src="script.js"></script>
        </section>

        <section class="presentationVideo">
            <div class="textePresentation">
                <h2>Crée des souvenir impérissables</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>

            <div class="video-container">
                <video controls width="55%" class="rounded-video">
                    <source src="image/videoDiplome.mp4" type="video/mp4">
                    Votre navigateur ne supporte pas la lecture des vidéos HTML5.
                </video>
            </div>

            <div class="boutonCampagneVideo">
                <a href="campagne.php">Campagne 2024</a>
            </div>
        </section>

        <section>
            <div class="blocCommentaire">
                <h2>Un mot des organisateurs</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.</br>
                    Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
                <div class="commentaire">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <div class="profilType">
                        <div class="photo-profil">
                            <img src="image/profil.jpg" alt="Photo de profil">
                        </div>
                        <p>John Doa Organisateur</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="image-section">
            <div class="overlay"></div>
            <h1 class="section-title">Célébrer pour l'avenir</h1>
        </section>
    </main>

    <?php require_once(__DIR__ . '/footer.php') ?>
</body>
</html>