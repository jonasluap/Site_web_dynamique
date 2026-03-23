<?php
// programme.php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= SITE_NAME ?> - Programme</title>
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
                    <li><a href="programme.php" class="active">Programme</a></li>
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
            <h1 class="page-title">Programme de la Journée</h1>
            
            <div class="section">
                <h2>Jeudi 12 Mars 2026</h2>
                <div class="timeline">
                    <div class="timeline-item">
                        <strong>8h30 - 9h00:</strong> Accueil des participants et conférenciers
                    </div>
                    <div class="timeline-item">
                        <strong>9h00 - 9h15:</strong> Quelques mots d'ouverture prononcés par le directeur de l'IUT
                    </div>
                    <div class="timeline-item">
                        <strong>9h15 - 10h15:</strong> Première session de conférence (45 min de présentation et 15 min d'échange)
                        <p><em>Thème : L'IA Générative au service de l'innovation</em></p>
                        <p><em>Intervenant proposé : [Nom du conférencier], [Titre/Société]</em></p>
                    </div>
                    <div class="timeline-item">
                        <strong>10h15 - 10h45:</strong> Pause café et échanges informels
                    </div>
                    <div class="timeline-item">
                        <strong>10h45 - 11h45:</strong> Deuxième session de conférence (45 min de présentation et 15 min d'échange)
                        <p><em>Thème : L'IA Prédictive, un levier de performance pour l'entreprise</em></p>
                        <p><em>Intervenant proposé : [Nom du conférencier], [Titre/Société]</em></p>
                    </div>
                    <div class="timeline-item">
                        <strong>11h45 - 12h00:</strong> Remerciements et clôture
                    </div>
                    <div class="timeline-item">
                        <strong>12h00:</strong> Cocktail de clôture
                    </div>
                </div>
            </div>

            <div class="section">
                <h2>À propos des intervenants</h2>
                <p>Les noms des conférenciers seront prochainement annoncés. Nous recherchons des professionnels passionnants et reconnus pour partager leurs expériences pratiques et leur vision de l'IA.</p>
                <p>Si vous souhaitez proposer un intervenant ou une thématique, n'hésitez pas à nous <a href="contact.php">contacter</a>.</p>
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

    <style>
        .timeline {
            position: relative;
            padding-left: 30px;
        }
        .timeline::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 2px;
            background: var(--primary-color);
        }
        .timeline-item {
            position: relative;
            padding-bottom: 1.5rem;
        }
        .timeline-item::before {
            content: '';
            position: absolute;
            left: -34px;
            top: 5px;
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background: var(--primary-color);
            border: 2px solid #fff;
        }
    </style>
</body>
</html>