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
    <link rel="stylesheet" href="css/boutique.css">
    <link rel="stylesheet" href="css/carrousel.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">

    <title>BMX club Montreal</title>
</head>
<body>
    <main>
        <?php require_once(__DIR__ . '/header.php') ?>

        <section class="imageBoutique">
            <h2>notre boutique</h2>
            <img src="image/boutique1.png" alt="produit boutique">
            <img src="image/boutique2.png" alt="produit boutique">
            <img src="image/boutique3.png" alt="produit boutique">
        </section>

        <div class="boutonBoutique">
            <a href="https://boutiqueldfs.ca/collections/bmx-mtl">Découvrez tous nos article dans notre Boutique en Ligne</a>
        </div>

        <?php require_once(__DIR__ . '/carrousel.php') ?>

        <?php require_once(__DIR__ . '/footer.php') ?>
    </main>
</body>
</html>