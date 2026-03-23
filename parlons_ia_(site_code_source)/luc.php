<?php
// luc.php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= SITE_NAME ?> - Luc Julia</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        .expert-header {
            background: linear-gradient(135deg, #0056b3, #004085);
            color: white;
            padding: 4rem 0;
            text-align: center;
        }
        .expert-container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 2rem;
        }
        .expert-profile {
            display: flex;
            gap: 3rem;
            margin-bottom: 3rem;
            align-items: flex-start;
        }
        .expert-photo {
            flex: 0 0 300px;
        }
        .expert-photo img {
            width: 100%;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }
        .expert-info {
            flex: 1;
        }
        .expert-title {
            color: #0056b3;
            font-size: 1.1rem;
            margin-bottom: 0.5rem;
        }
        .achievements-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 1.5rem;
            margin: 2rem 0;
        }
        .achievement-card {
            background: #f8f9fa;
            padding: 1.5rem;
            border-radius: 10px;
            border-left: 4px solid #0056b3;
        }
        .research-areas {
            display: flex;
            flex-wrap: wrap;
            gap: 0.8rem;
            margin: 1.5rem 0;
        }
        .research-tag {
            background: #f8f9fa;
            color: #0056b3;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-size: 0.9rem;
            border: 1px solid #0056b3;
        }
        @media (max-width: 768px) {
            .expert-profile {
                flex-direction: column;
            }
            .expert-photo {
                flex: none;
                width: 100%;
                max-width: 300px;
                margin: 0 auto;
            }
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
        <section class="expert-header">
            <div class="container">
                <h1>Luc Julia</h1>
                <p class="expert-title">Co-créateur de Siri • Directeur Scientifique Renault • Inventeur et Entrepreneur</p>
                <p>Pionnier de l'IA conversationnelle et des interfaces vocales intelligentes</p>
            </div>
        </section>

        <div class="expert-container">
            <div class="expert-profile">
                <div class="expert-photo">
                    <img src="assets/images/luc-julia.jpeg" alt="Luc Julia">
                </div>
                <div class="expert-info">
                    <h2>Biographie</h2>
                    <p>Luc Julia est un ingénieur et inventeur français mondialement connu pour être le co-créateur de Siri, l'assistant vocal d'Apple. Diplômé de l'École Nationale Supérieure d'Électronique, d'Électrotechnique, d'Informatique, d'Hydraulique et des Télécommunications, il a poursuivi une carrière internationale entre la France et la Silicon Valley.</p>
                    
                    <p>Après avoir co-fondé la startup Siri qui a été rachetée par Apple en 2010, il a dirigé le développement de l'assistant vocal avant de rejoindre Samsung en tant que Vice-Président Innovation. Il est actuellement Directeur Scientifique de Renault, où il pilote la transformation numérique et l'intégration de l'intelligence artificielle dans l'industrie automobile.</p>
                    
                    <h3>Domaines d'expertise</h3>
                    <div class="research-areas">
                        <span class="research-tag">IA conversationnelle</span>
                        <span class="research-tag">Assistants vocaux</span>
                        <span class="research-tag">Innovation automobile</span>
                        <span class="research-tag">Internet des objets</span>
                        <span class="research-tag">Transformation digitale</span>
                        <span class="research-tag">Entrepreneuriat tech</span>
                    </div>
                </div>
            </div>

            <section class="section">
                <h2>Principales réalisations</h2>
                <div class="achievements-grid">
                    <div class="achievement-card">
                        <h3>🗣️ Co-créateur de Siri</h3>
                        <p>A développé le premier assistant vocal intelligent grand public, racheté par Apple en 2010.</p>
                    </div>
                    <div class="achievement-card">
                        <h3>🚗 Directeur Scientifique Renault</h3>
                        <p>Dirige la stratégie innovation et IA du constructeur automobile français.</p>
                    </div>
                    <div class="achievement-card">
                        <h3>📱 Vice-Président Innovation Samsung</h3>
                        <p>A dirigé l'innovation chez Samsung Electronics en Silicon Valley.</p>
                    </div>
                    <div class="achievement-card">
                        <h3>📚 Auteur à succès</h3>
                        <p>Auteur de "L'intelligence artificielle n'existe pas" (2019), best-seller sur l'IA.</p>
                    </div>
                </div>
            </section>

            <section class="section">
                <h2>Conférence à venir</h2>
                <div style="background: #f8f9fa; padding: 1.5rem; border-radius: 10px; border: 1px solid #0056b3;">
                    <h3>« L'IA dans la voiture de demain : entre assistance et autonomie »</h3>
                    <p><strong>Date :</strong> 13 mars 2026</p>
                    <p><strong>Horaire :</strong> 14h30 - 15h30</p>
                    <p><strong>Durée :</strong> 45 min de présentation + 15 min de Q/R</p>
                    <p>Luc Julia partagera sa vision de l'intégration de l'intelligence artificielle dans l'industrie automobile, des assistants vocaux personnalisés aux systèmes de conduite autonome, en abordant les défis technologiques et éthiques.</p>
                </div>
            </section>

            <section class="section">
                <h2>Publications et contributions</h2>
                <ul>
                    <li>Julia, L. (2019). "L'intelligence artificielle n'existe pas" - Éditions First</li>
                    <li>Brevet original de Siri : "Intelligent Automated Assistant" (US Patent 8,438,090)</li>
                    <li>Julia, L. (2021). "La voiture intelligente : mythes et réalités" - Revue Automobile</li>
                    <li>Conférences TEDx : "Pourquoi l'IA n'existe pas encore vraiment" (2020)</li>
                </ul>
            </section>

            <div style="text-align: center; margin: 3rem 0;">
                <a href="partenaires.php" class="btn">← Retour aux partenaires</a>
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