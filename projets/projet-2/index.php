<!DOCTYPE html>
<html lang="fr">
<head>
<title>Pokédia</title>
<meta charset="utf-8">
<link rel="stylesheet" type ="text/css" href="css/styles.css">
<link rel="icon" type="image/png" href="images/pokeball.png">
<meta name="description" content="Découvrez Pokédia, l'encyclopédie Pokémon au style rétro Game Boy. Explorez notre Pokédex, accédez aux données détaillées et profitez d'une galerie d'artworks unique.">
</head>
    <body>
        <?php
        // Appel du bloc Header et du Menu>
        require ('header.php');
        ?>

        <main>
            <div class="pageacceuil">

                <h1 data-text="ACCUEIL">ACCUEIL</h1>
                
                <section class="panel-1">
                    
                    <div id="pikachu" onclick="playPika()">
                        <img src="./images/pika.jpg" alt="Pikachu Game Boy">
                        <audio id="pikacri" src="datas/pikacri.mp3"></audio>
                    </div>

                    <div id="menu">
                        <a href="./galerie.php" id="clignote" class="btn-retro">START ADVENTURE</a>
                        <a href="./contact.php" class="btn-retro">CONTACT</a>
                    </div>
                </section>

            </div>
        </main>
        <?php
        // Appel du Pied de Page
        require ('footer.php');
        ?>
        <script src="js/acceuil.js"></script>
        <script src="js/gameboy-transition.js"></script>
    </body>
</html>
