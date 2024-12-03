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
    <link rel="stylesheet" href="css/evenement.css">
    <link rel="stylesheet" href="css/carrousel.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">

    <title>BMX club Montreal</title>
</head>
<body>
    <main>
        <?php require_once(__DIR__ . '/header.php') ?>

        <section class="porteOuverte">
            <img src="image/porteOuverte2024.png" >
        </section>

        <div class="trait"></div>

        <section class="texteAssemblee">
            <h2>Assemblée générale annuelle 2024</h2>
            <p>
                L’assemblée générale annuelle (AGA) aura lieu jeudi 22 février de 19h à 20h30. Vous êtes invités à vous joindre à la visioconférence qui sera ouverte à tous. 
                Le lien vous sera partagé sous peu sur la page WEB de BMX Montréal.
            </p>
            <p>
                Lors de cette assemblée, il y aura présentation du rapport financier au 31 décembre 2023 et du rapport d’activités pour l’année 2023. 
                Il y aura également l’élection pour trois (3) postes d’administrateurs au conseil d’administration (CA).
            </p>
            <p>
                Que vous soyez un mordu de BMX de course ou que votre enfant le pratique, le club a besoin de vous. Nous avons besoin de renfort. 
                Des postes sont à combler pour la saison 2023.
            </p>
            <p>
                Tout le monde a de l’expérience pertinente qui peut aider le club. Le conseil d’administration est le principal moteur du succès du Club. 
                Mais nous avons besoin de relève pour préserver la santé et de la viabilité de l’organisme. Certains administrateurs quittent cette année et d’autres font un dernier mandat. 
                Le passage des connaissances est important. Concrètement, si vous vous présentez comme membre du ca et que vous êtes élus, vous devrez:
            </p>
            <ul>
                <li>Être présent aux réunions du conseil d’administration;</li>
                <li>Prendre en charge des missions spécifiques;</li>
                <li>Promouvoir le club BMX Montréal;</li>
                <li>Partager vos visions pour le futur du club.</li>
            </ul>
            <p>Afin d’assurer son développement à court, moyen et long termes, BMX Montréal aimerait ajouter certaines expertises à son conseil d’administration :</p>
            <ul>
                <li>Communication, marketing.</li>
                <li>Recherche de financement.</li>
                <li>Développement et encadrement de programmes sportifs.</li>
            </ul>
            <p>
            Le club étant un organisme à but non lucratif (OBNL), le travail de chacun des membres du CA est non rémunéré.</br>
            Nous vous attendons en grand nombre.</br>
            Cordialement.
            </p>
        </section>

        <?php require_once(__DIR__ . '/carrousel.php') ?>

        <?php require_once(__DIR__ . '/footer.php') ?>
    </main>


</body>
</html>