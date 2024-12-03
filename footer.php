<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="cssMTL/footer.css">
</head>
<body>
<footer>

<div class="infoSite">
    <a href="homePage.php" class="logo"><img src="image/logoSansFond.png" alt="logo des finances">Journée des finances</a>
    <p>208 Boulevard Ste-Rose, Laval</br> Québec Canada H7L 1L6</p>
    <p>E-mail : info@placeholder.com</p>
    <p>Tel : 514-524-4900 / 1-844-524-4900</p>
    <p>Fax : 1-855-797-6923</p>
</div>

<div class="formulaire">
        <h3>Contactez-nous</h3>
        <div class="trait"></div>
        <p>services rapide est adapté à vos besoins</p>

    <form action="URL_DE_TRAITEMENT_DU_FORMULAIRE" method="POST">
        <div>
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" placeholder="Votre nom" required>
        </div>

        <div>
            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" placeholder="Votre prénom" required>
        </div>

        <div>
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" placeholder="Votre mail" required>
        </div>

        <div>
            <label for="contexte">Contexte du message :</label>
            <select id="contexte" name="contexte" required>
                <option value="">Sélectionnez un contexte</option>
                <option value="question">Question</option>
                <option value="feedback">Feedback</option>
                <option value="support">Support</option>
            </select>
        </div>

        <div>
            <label for="message">Message :</label>
            <textarea id="message" name="message" rows="4" placeholder="Votre message" required></textarea>
        </div>

        <button type="submit">Envoyer votre mesage</button>
    </form>

</div>
</footer>

</doby>
</html>
