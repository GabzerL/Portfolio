<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
    <link rel="stylesheet" type ="text/css" href="css/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="images/pokeball.png">
    <meta name="description" content="Découvrez Pokédia, l'encyclopédie Pokémon au style rétro Game Boy. Explorez notre Pokédex, accédez aux données détaillées et profitez d'une galerie d'artworks unique.">
    <title>Pokédia</title>
</head>
<body>

    <script>
        $(document).ready(function() {
            $('#tableau-pokemons').DataTable({
                responsive: true,
                language: {
                    url: 'https://cdn.datatables.net/plug-ins/1.13.7/i18n/fr-FR.json'
                },
            });
        });
    </script>
        
    <?php
    // Appel du bloc Header et du Menu>
    require ('header.php');
    ?>

    <main>
        <h1 data-text="DONNÉES">DONNÉES</h1>
        <?php
            // Déclaration du fichier et de son chemin dans une variable
            $fichier = 'datas/datas.json';

            // Lecture du fichier - On stocke le contenu dans une autre variable
            $tabFilmsJSON = file_get_contents($fichier);

            // Décodage du contenu du fichier et transformation en tablau php (array)
            $tabFilmsPHP = json_decode($tabFilmsJSON,true);

            echo '<table id="tableau-pokemons">';
                echo '<caption>Liste des Pokémon</caption>';
                    echo'<thead>';
                        echo '<tr>';
                        echo '<th>Nom</th>';
                        echo '<th>Type</th>';
                        echo '<th>Cri</th>';
                        echo '<th>Date Sortie</th>';
                        echo '<th>Évolutions</th>';
                        echo '</tr>';
                    echo '</thead>';
                echo '<tbody>';
                // Parcours et Affichage du contenu du tableau
                foreach ($tabFilmsPHP as $pokemon) {
                echo '<tr>';
                echo '<td>'.$pokemon['Nom'].'</td>';
                echo '<td>'.$pokemon['Type(s)'].'</td>';
                echo '<td>'.$pokemon['Cri'].'</td>';
                echo '<td>'.$pokemon['Date Sortie'].'</td>';
                echo '<td>'.$pokemon['Évolutions ?'].'</td>';
                echo '</tr>';
                }
                echo '</tbody>';
                
            echo '</table>';
        ?>
    </main>
        <?php
        // Appel du Pied de Page
        require ('footer.php');
        ?>
    <script src="js/gameboy-transition.js"></script>
</body>
</html>