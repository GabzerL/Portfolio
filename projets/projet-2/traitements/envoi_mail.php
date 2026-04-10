<?php
session_start();
$_SESSION['information']='';

$nom=ucfirst(mb_strtolower($_POST['nom']));
$prenom=ucfirst(mb_strtolower($_POST['prenom']));
$message=$_POST['message'];
$email=$_POST['email'];
$demande=$_POST['demande'];

// Vérification des données du formulaire
$affichage_retour = '';
$erreurs=0;

// tchek pour le nom
if (!empty($_POST['nom'])) {
	$nom=$_POST['nom'];
} else {
    $affichage_retour .= 'Le champ nom est vide.<br>';
    $erreurs++;
}

//tchek prénom
if (!empty($_POST['prenom'])) {
	$prenom=$_POST['prenom'];
} else {
    $affichage_retour .= 'Le champ prénom est vide.<br>';
    $erreurs++;
}

//tchek l'email
if (!empty($_POST['email'])) {
    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $email = $_POST['email'];
    } else {
        $affichage_retour .= 'Le format de l\'adresse email est incorrect.<br>';
        $erreurs++;
    }
} else {
    $affichage_retour .= 'Le champ email est vide.<br>';
    $erreurs++;
}

//tchek message
if (!empty($_POST['message'])) {
    $message=$_POST['message'];
} else {
    $affichage_retour .= 'Le champ message est vide.<br>';
    $erreurs++;
}


//tchek btn radio
if (!empty($_POST['demande'])) {
    $demande=$_POST['demande'];
} else {
    $affichage_retour .= 'Veuillez sélectionner un type de demande.<br>';
    $erreurs++;
}

if ($demande == ' information') {
    $demande=' demande d\'informations';
} elseif ($demande == 'devis') {
    $demande= ' demande de devis';
} elseif ($demande == 'reclamation') {
    $demande= ' demande de réclamation';
}


if ($erreurs == 0) {

    //MAIL1//
    $subject='SAE105 : '.$demande.' de '.$prenom.' '.$nom;
    $headers['From']="mmi25c09@mmi-troyes.fr";
    $headers['Reply-to']=$email;
    $headers['X-Mailer']='PHP/'.phpversion();
    $email_dest="mmi25c09@mmi-troyes.fr";

    if (mail($email_dest,$subject,$message,$headers)) {
    $erreurs=0;
    } else {
    $erreurs++;
    }

    $subject2='Confirmation de la demande de '.$prenom.' '.$nom.' SAE105';
    $headers2['From']="mmi25c09@mmi-troyes.fr";
    $headers2['Reply-to']="no-reply@mmi-troyes.fr";
    $headers2['X-Mailer']='PHP/'.phpversion();
    $headers2['MIME-Version'] = '1.0';
    $headers2['content-type'] = 'text/html; charset=utf-8';
    $email_dest2="mmi25c09@mmi-troyes.fr";
    $message2 = "
    <html>
        <head>
            <title>Confirmation</title>
        </head>
        <body style='font-family: Arial, sans-serif;'>
            <h2 style='color: #2c3e50;'>Merci de votre confiance !</h2>
            <p>Bonjour <strong>$prenom $nom</strong>,</p>
            <p>Nous avons bien reçu votre <strong>$demande</strong>.</p>
            <p>Notre équipe vous répondra dans les plus brefs délais.</p>
            <br>
            <p style='font-size: 0.8em;'>Ceci est un message automatique, merci de ne pas y répondre.</p>
        </body>
    </html>";

    //mail2//
    if (mail($email_dest2,$subject2,$message2,$headers2)) {
    $erreurs=0;
    mail($email,$subject2,$message2,$headers2);
    } else {
    $erreurs++;
    }

    // Détermination du message à affichée après les tentatives d'envoi
    $affichage_retour='Votre'.$demande.' à bien été envoyée <br>';

    if ($erreurs != 0) {
    $affichage_retour='Echec de l\'envoi du message <br>';
    }
}

$_SESSION['information']=$affichage_retour;
header('location: ../contact.php');