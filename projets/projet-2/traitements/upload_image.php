<?php
// Vérification de sélection d'un fichier
// Récupération des attributs du fichier (nom,type,taille)
if (!empty($_FILES)) {

    $image_nom=$_FILES['image']['name'];
    $image_type=$_FILES['image']['type'];
    $image_taille=$_FILES['image']['size'];
    $image_temporaire=$_FILES['image']['tmp_name'];
    $image_error=$_FILES['image']['error'];

} else {
    echo 'Vous devez sélectionner un fichier';
}

// Début Vérification de la conformité
$affichage_erreurs='';
$erreurs=0;

// Test si pas d'erreur de sélection
if ($image_error == 0) {
        // Test format du fichier en fonction de l'extension
    if ($image_type != 'image/jpeg') {
    $affichage_erreurs .='Le fichier n\'est pas au format jpeg ou extension invalide<br>';
    $erreurs++;
    }

    // Test format du fichier avec la fonction exif_imagetype
    if (exif_imagetype($image_temporaire) != IMAGETYPE_JPEG) {
    $affichage_erreurs .='Ce fichier n\'est pas une image jpeg<br>';
    $erreurs++;
    }

} else {
$affichage_erreurs='Impossible de télécharger le fichier, erreur de sélection<br>';
}

//verif taille
if ($image_error == 0) {
    // Test taille du fichier
    if ($image_taille > 500000) {
    $affichage_erreurs .='Le fichier est trop volumineux (500Ko max)<br>';
    $erreurs++;
    }
    
}

// On affiche les erreurs
if ($erreurs != 0) {
echo $affichage_erreurs;
} else {
echo 'Fichier conforme<br>';
}

if ($erreurs == 0) {
$nbFichiers=-2; // On initialise le compteur de fichiers (-2 pour ne pas compter . et ..)
$dossier= opendir("../images/galerie");
while ($fichier = readdir($dossier)) {
$nbFichiers++;
}

// On renomme le fichier - imageN.jpg
$image_num=$nbFichiers+1;
$image_nom='image'.$image_num.'.jpg';

// On fixe le nom complet de la destination (chemin relatif/imageN.jpg)
$destination="../images/galerie/".$image_nom;

if ($erreurs == 0) {

    if (move_uploaded_file($image_temporaire, $destination)) {
        // SUCCÈS
        $erreurs = 0;
        $affichage_erreurs = "";
    } else {
        // ÉCHEC
        $affichage_erreurs = 'Erreur de téléchargement lors du déplacement<br>';
        $erreurs++;
    }

    // SECOND AFFICHAGE
    if ($erreurs != 0) {
        echo $affichage_erreurs;
    } else {
        echo 'Téléchargement terminé avec succès<br>';
        echo '<img src="'.$destination.'">';
    }
}
}

?>