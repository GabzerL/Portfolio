<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Pokédia</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="icon" type="image/png" href="images/pokeball.png">
    <meta name="description" content="Découvrez Pokédia, l'encyclopédie Pokémon au style rétro Game Boy. Explorez notre Pokédex, accédez aux données détaillées et profitez d'une galerie d'artworks unique.">
</head>
    <body>
        
    <?php require ('header.php'); ?>

    <main>
        <h1 data-text="CONTACT">CONTACT</h1>

        <form action="traitements/envoi_mail.php" method="post" id="formulaire">
            
            <div id="entete">
                <div>
                    <label for="prenom">Prenom<span>*</span></label>
                    <input type="text" id="prenom" name="prenom" placeholder="Votre prénom">
                </div>
                <div>
                    <label for="nom">Nom<span>*</span></label>
                    <input type="text" id="nom" name="nom" placeholder="Votre nom">
                </div>
            </div>

            <div id="radio">
                <input type="radio" id="information" name="demande" value=" demande d'information">
                <label for="information">Informations</label>
                <input type="radio" id="devis" name="demande" value=" demande de devis">
                <label for="devis">Demande de devis</label>
                <input type="radio" id="reclamation" name="demande" value=" demande de réclamation">
                <label for="reclamation">Réclamation</label>
            </div>

            <label for="email">E-mail<span>*</span></label>
            <input type="email" id="email" name="email" placeholder="Votre e-mail">

            <label for="message">Message<span>*</span></label>
            <textarea id="message" name="message" placeholder="Votre message"></textarea>

            <input type="submit" value="Envoyer">

            <div id="msgretour">
                <?php if (isset($_SESSION['information'])): ?>
                    <div class="statut-formulaire">
                        <?php echo $_SESSION['information']; ?>
                    </div>
                    <?php session_unset(); ?>
                <?php endif; ?>
            </div>
        </form>

    </main>

    <?php require ('footer.php'); ?>
    
    <script src="js/gameboy-transition.js"></script>

    </body>
</html>