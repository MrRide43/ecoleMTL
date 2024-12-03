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
    <link rel="stylesheet" href="css/calendrier.css">
    <link rel="stylesheet" href="css/carrousel.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">

    <title>BMX club Montreal</title>
</head>
<body>
    <?php require_once(__DIR__ . '/header.php') ?>

    <main>
        <section class="calendrier">
            <div>
                <h2>Calendrier</h2>
                <p>
                    Découvrez tous les événements à venir de notre club BMX pour l’année en cours. Compétitions, entraînements, et rencontres :
                    restez informé et ne manquez rien de nos activités. 
                    Le calendrier est régulièrement mis à jour pour vous offrir les dernières informations sur nos événements.
                </p>
            </div>
        </section>

        <section class="tokifyCalendar">
            <div data-tockify-component="calendar" data-tockify-calendar="calendrierbmx"></div>
            <script data-cfasync="false" data-tockify-script="embed" src="https://public.tockify.com/browser/embed.js"></script>        
        </section>

        <section>
            <div class="blocBouton">
                <a href="https://fqsc.net/bmx/calendrier-et-documentation" class="bouton">Acces au calendrier des courses 2024</a>
            </div>
        </section>

        <?php require_once(__DIR__ . '/carrousel.php')?>
        
        <?php require_once(__DIR__ . '/footer.php') ?>  

    </main>

</body>
</html>