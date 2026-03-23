<?php
// index.php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= SITE_NAME ?> - Accueil</title>
    <link rel="stylesheet" href="assets/css/style.css">

    <style>
        /* --- Hero Section with Video Background --- */
        .hero {
            position: relative;
            height: 100vh;
            overflow: hidden;
            color: #fff;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .hero video {
            position: absolute;
            top: 50%;
            left: 50%;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            transform: translate(-50%, -50%);
            z-index: -2;
            object-fit: cover;
        }

        .hero::after {
            content: "";
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.6);
            z-index: -1;
        }

        .hero .container {
            z-index: 1;
        }
    </style>
</head>
<body>

<header>
    <div class="container header-content">
        <a href="index.php" class="logo">
            <img src="assets/images/logo.jpeg" width="100px" height="100%" alt="Logo Conférence IA">
        </a>
        <nav>
            <ul>
                <li><a href="index.php" class="active">Accueil</a></li>
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
    <!-- HERO WITH VIDEO -->
    <section class="hero">
        <video autoplay muted loop playsinline>
            <source src="assets/videos/video-wallpaper.mp4" type="video/mp4">
            Votre navigateur ne supporte pas la vidéo.
        </video>

        <div class="container">
            <h1>Sensibilisation et Partage d'Expériences en Intelligence Artificielle</h1>
            <p>
                Rejoignez-nous pour une matinée de conférences sur les thématiques de l'IA générative et prédictive,
                destinée à un public de professionnels et de curieux.
            </p>
            <a href="inscription.php" class="btn">S'inscrire gratuitement</a>
        </div>
    </section>

    <div class="container">
        <section class="section">
            <h2>Présentation de l'événement</h2>
            <p>
                Le jeudi 12 mars 2026, l'IUT de Calais ouvre ses portes pour une matinée dédiée à l'intelligence artificielle.
                Cet événement, organisé en présentiel dans le grand amphi, vise à
                <strong>sensibiliser</strong> et à <strong>partager des expériences</strong> entre professionnels.
            </p>
            <p>
                Entrée gratuite, mais l'inscription est obligatoire en raison du nombre de places limitées.
            </p>
        </section>

        <section class="section">
            <h2>Thématiques abordées</h2>
            <div class="grid">
                <div class="card">
                    <h3>IA Générative</h3>
                    <p>
                        Explorez le potentiel créatif de l'IA, de la génération de texte à la création d'images et de musiques,
                        et découvrez ses applications concrètes.
                    </p>
                </div>
                <div class="card">
                    <h3>IA Prédictive</h3>
                    <p>
                        Plongez dans les modèles qui anticipent les tendances, optimisent les processus
                        et aident à la prise de décision stratégique dans divers secteurs.
                    </p>
                </div>
            </div>
        </section>

        <section class="section">
            <h2>Informations pratiques</h2>
            <ul>
                <li><strong>Date :</strong> Jeudi 12 mars 2026</li>
                <li><strong>Horaires :</strong> 8h30 - 12h00</li>
                <li><strong>Lieu :</strong> IUT Grand Amphi, site de Calais</li>
                <li><strong>Public :</strong> Jusqu'à 100 personnes, professionnels et étudiants</li>
                <li><strong>Entrée :</strong> Gratuite sur inscription</li>
            </ul>
        </section>
    </div>
</main>

<footer>
    <div class="container">
        <p>&copy; <?= date('Y'); ?> <?= SITE_NAME ?>. Tous droits réservés.</p>
        <p>Organisé par le département informatique de l'IUT de l'ULCO.</p>
        <p>
            <a href="mentions-legales.php">Mentions Légales</a> |
            <a href="contact.php">Contact</a>
        </p>
    </div>
</footer>

</body>
</html>
