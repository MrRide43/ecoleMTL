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
    <link rel="stylesheet" href="css/adhesion.css">
    <link rel="stylesheet" href="css/carrousel.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">

    <title>BMX club Montreal</title>
</head>
<body>
    <main>
        <?php require_once(__DIR__ . '/header.php') ?>

        <section class="texteAdhesion">
            <h1>Inscrivez vous</h1>
            <p>
                Pour toute information sur les inscriptions, les tarifs d’adhésion et les procédures pour rejoindre le club, 
                veuillez remplir le formulaire de contact. Nous vous répondrons rapidement avec les détails nécessaires.
            </p>
        </section>

        <div class="form-container">
            <form action="#" method="post">
                <div class="input-row">
                    <input type="text" placeholder="Prénom" required>
                    <input type="text" placeholder="Nom" required>
                </div>
                <input type="email" placeholder="Courriel" required>
                <textarea placeholder="Votre message" required></textarea>

                <div class="checkbox-section">
                    <p>Choisissez votre catégorie</p>
                    <label><input type="checkbox" name="category" value="inscription"> Inscription</label>
                    <label><input type="checkbox" name="category" value="tarif"> Information Tarif</label>
                    <label><input type="checkbox" name="category" value="sponsors"> Comment devenir sponsors</label>
                </div>

                <button type="submit" class="submit-btn">Envoyer</button>
            </form>
        </div>

        <?php require_once(__DIR__ . '/carrousel.php') ?>

        <?php require_once(__DIR__ . '/footer.php') ?>
    </main>
</body>
</html>