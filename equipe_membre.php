<!DOCTYPE html>
<html lang="fr">
<head>
     <!-- === Montserrat === -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
     <!-- === Montserrat === -->

    <!-- === Poppins === -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- === Poppins === -->

    <!-- === Oswald === -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <!-- === Oswald === -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/equipe_membre.css">
    <link rel="stylesheet" href="css/carrousel.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">

    <title>BMX club Montreal</title>
</head>
<body>

    <?php require_once(__DIR__ . '/header.php') ?> 

    <main>
        <section>
            <img src="image/image_page_equipe.webp" class="imagePiste" alt="pilote sur virage">
        </section>

        <section class="entraineur">
            <h2>Nos entraineurs</h2>
            <div class="contenu">
                <img src="image/entraineur/entraineur_1bis.webp" alt="entraineur 1">
                <p>Mathieu Lott </br> entraineur seniors</p>
            </div>

            <div class="contenu2">
                <img src="image/entraineur/entraineur_2.webp" alt="entraineur 2">
                <p>Florian Tisseron </br> entraineur seniors</p>
            </div>
            <div class="contenu">
                <img src="image/entraineur/entraineur_3bis.webp" alt="entraineur 3">
                <p>Alexis Loubert </br> entraineur seniors</p>
            </div>
            <div class="contenu4">
                <img src="image/entraineur/entraineur_4.webp" alt="entraineur 4">
                <p>Emily Landry </br> entraineur seniors</p>

                <img src="image/entraineur/entraineur_5.webp" alt="entraineur 5">
                <p>Louis Landry </br> entraineur seniors</p>
            </div>
            <div class="contenu">
                <img src="image/entraineur/entraineur_6.webp" alt="entraineur 5">
                <p>Dara Rendon entraineur substitut</p>

                <img src="image/entraineur/entraineur_7.webp" alt="entraineur 5">
                <p>Yanick Granger</br> entraineur substitut</p>

                <img src="image/entraineur/entraineur_8.webp" alt="entraineur 5">
                <p>Valérie Grondin </br> stagiaire</p>
                
                <img src="image/entraineur/entraineur_9.webp" alt="entraineur 5">
                <p>Anthony Detroio </br> stagiaire</p>
            </div>

        </section>

        <section class="admin">
            <div>
                <h2>Notre conseil d'administration pour 2024</h2>
                <p>
                Le Conseil d'administration est chargé de veiller au bon fonctionnement du club et de garantir sa pérennité. 
                Il doit mettre en œuvre les orientations, les objectifs et les décisions de l'Assemblée générale, 
                tout en assurant leur adéquation avec les besoins des membres. 
                De plus, il est responsable de préparer les orientations stratégiques, de définir les priorités, de concevoir le programme d'activités du club,
                et de superviser leur mise en œuvre effective.
                </p>
            </div>
        </section>

        <?php require_once(__DIR__ . '/carrousel.php')?>

        <?php require_once(__DIR__ . '/footer.php') ?>
    </main>
</body>