<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type ="text/css" href="css/styles.css">
    <link rel="icon" type="image/png" href="images/pokeball.png">
    <meta name="description" content="Découvrez Pokédia, l'encyclopédie Pokémon au style rétro Game Boy. Explorez notre Pokédex, accédez aux données détaillées et profitez d'une galerie d'artworks unique.">
    <title>Pokédia</title>
</head>
    <body>
    <?php
    // Appel du bloc Header et du Menu>
    require ('header.php');
    ?>
        <main>

            <h1 data-text="CREDITS">CRÉDITS</h1>

            <div class="conteneur-credits">
                <section class="section-credits">
                    <div class="entete-credits">
                        <h2>▶ IMAGES</h2>
                    </div>
                    <ul class="liste-credits">
                        <li>
                            <span class="description-credits">C'est la référence francophone, la liste complète avec les noms en français et les sprites de toutes les générations.</span>
                            <a href="https://www.pokepedia.fr/Liste_des_Pok%C3%A9mon_dans_l%27ordre_du_Pok%C3%A9dex_National" target="_blank" rel="noopener noreferrer" class="lien-credits">Pokepedia.fr ➜</a>
                        </li>
                        <li>
                            <span class="description-credits">Artworks officiels en haute définition</span>
                            <a href="https://www.pokemon.com/fr/pokedex/" target="_blank" rel="noopener noreferrer" class="lien-credits">Pokédex.fr ➜</a>
                        </li>
                        <li>
                            <span class="description-credits">La plus grosse banque d'images au monde</span>
                            <a href="https://archives.bulbagarden.net/wiki/Main_Page" target="_blank" rel="noopener noreferrer" class="lien-credits">Bulbapedia ➜</a>
                        </li>
                        <li>
                            <span class="description-credits">Liste complète des pokémons avec leurs capacités</span>
                            <a href="https://www.serebii.net/pokemon/all.shtml" target="_blank" rel="noopener noreferrer" class="lien-credits">Serebii.net ➜</a>
                        </li>
                    </ul>
                </section>

                <section class="section-credits">
                    <div class="entete-credits">
                        <h2>▶ INFORMATIONS ET RESSOURCES</h2>
                    </div>
                    <ul class="liste-credits">
                        <li>
                            <span class="description-credits">Lore, description du Pokédex, étymologie, apparitions dans l'animé et le manga.</span>
                            <a href="https://www.pokepedia.fr/Liste_des_Pok%C3%A9mon_dans_l%27ordre_du_Pok%C3%A9dex_National" target="_blank" rel="noopener noreferrer" class="lien-credits">Pokepedia.fr ➜</a>
                        </li>
                        <li>
                            <span class="description-credits">Statistiques de combat détaillées, "movesets" (quelles attaques apprendre), et solutions complètes des jeux.</span>
                            <a href="https://www.pokebip.com/" target="_blank" rel="noopener noreferrer" class="lien-credits">pokebip.com ➜</a>
                        </li>
                        <li>
                            <span class="description-credits">Données brutes, événements en direct, mécaniques cachées. Il est souvent mis à jour avant les sites français.</span>
                            <a href="https://www.serebii.net/pokemon/all.shtml" target="_blank" rel="noopener noreferrer" class="lien-credits">Serebii.net ➜</a>
                        </li>
                    </ul>
                </section>

                <section class="section-credits">
                    <div class="entete-credits">
                        <h2>▶ CRÉATEURS DES POKEMONS ET DE LEURS CRIS</h2> 
                    </div>
                    <ul class="liste-credits">
                        <li>
                            <span class="description-credits">Ken Sugimori - Illustrateur principal des Pokémons depuis la première génération.</span>
                            <a href="https://en.wikipedia.org/wiki/Ken_Sugimori" target="_blank" rel="noopener noreferrer" class="lien-credits">Wikipedia ➜</a>
                        </li>
                        <li>
                            <span class="description-credits">Junichi Masuda - Créateurs des effets sonores et des cris des Pokémons.</span>
                            <a href="https://en.wikipedia.org/wiki/Junichi_Masuda" target="_blank" rel="noopener noreferrer" class="lien-credits">Wikipedia ➜</a>
                        </li>
                    </ul>
                </section>

                <div class="remerciements-credits">
                    <p>★ MERCI À TOUTES CES RESSOURCES ★</p>
                </div>
            </div>

        </main>

    <?php
    // Appel du Pied de Page
    require ('footer.php');
    ?>
    <script src="js/gameboy-transition.js"></script>
    </body>
</html>