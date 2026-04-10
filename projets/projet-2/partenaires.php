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
            <h1 data-text="PARTENAIRES">PARTENAIRES</h1>

            <section class="conteneur-credits">
                <section class="section-credits">
            
                    <div class="entete-credits">
                        <h2>Pourquoi se site ?</h2>
                    </div>

                    <ul class="liste-credits">
                        <li>
                            <span class="description-credits">J'ai lancé ce site avant tout pour le plaisir de la collection et parce que les premiers Pokémon n'ont rien perdu de leur charme. Même des années après, la Game Boy garde une vibe unique que les jeux récents n'ont pas forcément.J'ai donc choisis de faire un site sur les 50 premiers pokémons dans l'univers rétro de la game boy.</span>
                        </li>
                    </ul>
                </section>
            </section>

            <section class="partenaires-section">
                <div class="partenaire" id="gabriel">
                    <h2>Gabriel Lemazurier</h2>
                    <img src="images/partenaires/gabriel.jpg" alt="image_Gabriel">
                    <p>Site sur les 50 premiers pokémons dans l'univers rétro de la game boy</p>
                    <a href="http://sae105.mmi25c09.mmi-troyes.fr/index.php" target="_blank" rel="noopener noreferrer" class="lien-credits">Site de Gabriel ➜</a>
                </div>
                <div class="partenaire" id="titouan">
                    <h2>Titouan Gaucher</h2>
                    <img src="images/partenaires/titouan.jpeg" alt="image_Titouan">
                    <p>Site sur le top 50 des meilleurs films selon IMDB</p>
                    <a href="http://sae105.mmi25d04.mmi-troyes.fr/index.php" target="_blank" rel="noopener noreferrer" class="lien-credits">Site de Titouan ➜</a>
                </div>
                <div class="partenaire" id="alexis">
                    <h2>Alexis Deloisy</h2>
                    <img src="./images/partenaires/alexis.jpg" alt="image_Alexy">
                    <p>Site sur le septiéme art avec 50 films cults</p>
                    <a href="http://sae105.mmi25c03.mmi-troyes.fr/index.php" target="_blank" rel="noopener noreferrer" class="lien-credits">Site d'Alexis ➜</a>
                </div>
            </section>

            <section class="conteneur-credits"> 
                <section class="section-credits">
            
                    <div class="entete-credits">
                        <h2>Documents SAE106</h2>
                    </div>

                    <ul class="liste-credits">
                        <li>
                            <span class="description-credits">Évaluation des menaces et opportunités du projet.</span>
                            <a href="./datas/sae106/Analyse-des-Risques-Projet-WP-ASSO-2026.pdf" download class="lien-credits">Analyse des risques ➜</a>
                        </li>
                        <li>
                            <span class="description-credits">Planning détaillé et échéancier des tâches.</span>
                            <a href="./datas/sae106/gantt_sae106.pdf" download class="lien-credits">Planning Gantt ➜</a>
                        </li>
                        <li>
                            <span class="description-credits">Planification de la visibilité et des réseaux.</span>
                            <a href="./datas/sae106/strat_com.pdf" download class="lien-credits">Stratégie de communication ➜</a>
                        </li>
                        <li>
                            <span class="description-credits">Structure de découpage du projet WPS.</span>
                            <a href="./datas/sae106/wps.pdf" download class="lien-credits">WPS ➜</a>
                        </li>
                    </ul>
                </section>
            </section>
            
        </main>
            <?php
            // Appel du Pied de Page
            require ('footer.php');
            ?>
        <script src="js/gameboy-transition.js"></script>
    </body>
</html>