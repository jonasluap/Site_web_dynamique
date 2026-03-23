<?php
// venir.php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= SITE_NAME ?> - Venir à l'IUT</title>
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
                <li><a href="venir.php" class="active">Venir à l'IUT</a></li>
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
        <h1 class="page-title">Comment venir à l'IUT de Calais</h1>

        <!-- ADRESSE -->
        <div class="section">
            <h2>Adresse</h2>
            <p>
                <strong>IUT de Calais – Département Informatique</strong><br>
                50 rue Ferdinand Buisson<br>
                62228 Calais Cedex
            </p>

            <!-- LIVE MAP -->
            <div class="map-container">
                <iframe
                    src="https://www.google.com/maps?q=IUT%20de%20Calais&output=embed"
                    width="100%"
                    height="400"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>

        <!-- TRAIN -->
        <div class="section">
            <h2>En train</h2>
            <p>La gare de Calais-Ville est desservie par des TGV et des TER.</p>
            <ul>
                <li>Taxi : environ 10 minutes</li>
                <li>Bus (ligne direction Cité de l'Europe) – arrêt « IUT »</li>
                <li>À pied : environ 25 minutes</li>
            </ul>
        </div>

        <!-- CAR -->
        <div class="section">
            <h2>En voiture</h2>
            <p>Depuis l’autoroute A16 (Paris – Dunkerque) :</p>
            <ul>
                <li>Prendre la sortie « Calais-Centre »</li>
                <li>Suivre les panneaux « Université »</li>
            </ul>
            <p><strong>Parking gratuit</strong> disponible à l’entrée de l’IUT.</p>
        </div>

        <!-- WALK -->
        <div class="section">
            <h2>À pied</h2>
            <p>
                Depuis le centre-ville : environ 30 minutes.<br>
                Depuis la gare : environ 25 minutes.
            </p>
        </div>
    </div>
</main>

<footer>
    <div class="container">
        <p>&copy; <?= date('Y'); ?> <?= SITE_NAME ?>. Tous droits réservés.</p>
        <p>Organisé par le département informatique de l’IUT de l’ULCO.</p>
        <p>
            <a href="mentions-legales.php">Mentions légales</a> |
            <a href="contact.php">Contact</a>
        </p>
    </div>
</footer>

<style>
.map-container {
    margin: 2rem 0;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
}
</style>

</body>
</html>
