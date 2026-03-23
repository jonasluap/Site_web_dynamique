<?php
// mentions-legales.php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= SITE_NAME ?> - Mentions Légales</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header>
        <div class="container header-content">
            <a href="index.php" class="logo">
                <img src="assets/images/logo.jpeg" width="100px" height="100%" alt="Logo Conférence IA">
            </a>
            <nav>
                <ul>
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="programme.php">Programme</a></li>
                    <li><a href="venir.php">Venir à l'IUT</a></li>
                    <li><a href="inscription.php">Inscription</a></li>
                    <li><a href="partenaires.php">Partenaires</a></li>
                    <li><a href="equipe.php">Équipe</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <div class="container">
            <h1 class="page-title">Mentions Légales</h1>
            
            <div class="section">
                <h2>Éditeur du site</h2>
                <p>
                    IUT de Calais - Département Informatique<br>
                    Université du Littoral Côte d'Opale (ULCO)<br>
                    50 rue Ferdinand Buisson<br>
                    62228 Calais Cedex<br>
                    France
                </p>
                <p>
                    Téléphone : +33 3 21 46 36 00<br>
                    Email : conference-ia@iut-calais.univ-littoral.fr
                </p>
            </div>

            <div class="section">
                <h2>Directeur de la publication</h2>
                <p>Le Directeur de l'IUT de Calais</p>
            </div>

            <div class="section">
                <h2>Hébergement</h2>
                <p>
                    [Nom de l'hébergeur]<br>
                    [Adresse de l'hébergeur]<br>
                    [Téléphone de l'hébergeur]
                </p>
            </div>

            <div class="section">
                <h2>Propriété intellectuelle</h2>
                <p>L'ensemble de ce site relève de la législation française et internationale sur le droit d'auteur et la propriété intellectuelle. Tous les droits de reproduction sont réservés, y compris pour les documents téléchargeables et les représentations iconographiques et photographiques.</p>
            </div>

            <div class="section">
                <h2>Données personnelles (RGPD)</h2>
                <p>Conformément au Règlement Général sur la Protection des Données (RGPD), vous disposez d'un droit d'accès, de modification et de suppression des données vous concernant. Pour exercer ce droit, merci de nous contacter via le formulaire de contact.</p>
                <p>Les données collectées via le formulaire d'inscription sont utilisées exclusivement pour la gestion des participants à la conférence. Elles ne sont ni vendues ni partagées avec des tiers sans votre consentement explicite.</p>
            </div>

            <div class="section">
                <h2>Cookies</h2>
                <p>Ce site n'utilise pas de cookies à des fins de suivi ou de publicité. Des cookies techniques peuvent être utilisés pour assurer le bon fonctionnement du site.</p>
            </div>
        </div>
    </main>

    <footer>
        <div class="container">
            <p>&copy; <?= date('Y'); ?> <?= SITE_NAME ?>. Tous droits réservés.</p>
            <p>Organisé par le département informatique de l'IUT de l'ULCO.</p>
            <p><a href="mentions-legales.php">Mentions Légales</a> | <a href="contact.php">Contact</a></p>
        </div>
    </footer>
</body>
</html>