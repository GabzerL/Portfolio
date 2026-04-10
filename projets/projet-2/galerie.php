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
    require ('header.php');
    ?>

    <main>
        <h1 data-text="GALERIE">GALERIE</h1>
        
        <?php
            $fichier = 'datas/datas.json';
            $json = file_get_contents($fichier);
            $pokemons = json_decode($json, true);
        ?>

        <div class="pokedex-grille">
            <?php foreach ($pokemons as $pokemon): ?>
                <div class="pokedex-carte">
                    <span class="pokedex-id">No. <?php echo sprintf("%03d", $pokemon['#']); ?></span>
                    
                    <div class="img-container">
                        <img src="images/pokedex/<?php echo $pokemon['Image']; ?>"
                        alt="<?php echo $pokemon['Nom']; ?>">
                    </div>

                    <div class="pokedex-info">
                        <h2><?php echo $pokemon['Nom']; ?></h2>
                        <p class="type"><?php echo $pokemon['Type(s)']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div id="pokedexmodal" class="modal">
            <span class="fermeturemodal">&times;</span>
            <img class="modal-galerie" id="grossimage" alt="image de pokémon agrandie" src="">
            <div id="caption"></div>
        </div>

        <div id="sous-titre" class="entete-credits">
            <h2 data-text="ARTWORKS COMMUNAUTAIRES">ARTWORKS COMMUNAUTAIRES</h2>
        </div>

        <form action="traitements/upload_image.php" method="post" enctype="multipart/form-data">
            <label for="image">Choisir un fichier</label>
            <input type="file" name="image" id="image" />
            <input type="submit" value="Télécharger" />
        </form>

        <section class="pokedex-grille">
            
            <?php
            $nbFichiers=-2; // Le dossier contient deux fichier cachés . et ..
            $dossier= opendir("images/galerie");
            while ($fichier = readdir($dossier)) {
            $nbFichiers++;
            }

            $i=1;
            while($i <= $nbFichiers) {
                echo '<div class="pokedex-carte">';
                echo '    <div class="img-container">';
                echo '        <img src="images/galerie/image'.$i.'.jpg" alt="">';
                echo '    </div>';
                echo '</div>';
            $i++;
            }
            ?>
        </section>

    </main>
    <?php
    require ('footer.php');
    ?>
    <script src="js/modal.js"></script>
    <script src="js/gameboy-transition.js"></script>
    </body>
</html>