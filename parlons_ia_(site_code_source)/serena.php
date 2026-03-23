<?php
// serena.php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= SITE_NAME ?> - Serena Villata</title>
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
                <h1>Serena Villata</h1>
                <p class="expert-title">Directrice de Recherche CNRS • Laboratoire I3S (CNRS/Université Côte d'Azur)</p>
                <p>Experte en Traitement Automatique du Langage Naturel, Argumentation et IA Symbolique</p>
            </div>
        </section>

        <div class="expert-container">
            <div class="expert-profile">
                <div class="expert-photo">
                    <img src="assets/images/serena-villata.jpeg" alt="Serena Villata">
                </div>
                <div class="expert-info">
                    <h2>Biographie</h2>
                    <p>Serena Villata est Directrice de Recherche au CNRS, affectée au laboratoire I3S (CNRS/Université Côte d'Azur). Elle est une chercheuse de renommée internationale dans le domaine du Traitement Automatique du Langage Naturel (TALN) et des systèmes d'argumentation.</p>
                    
                    <p>Après avoir obtenu son doctorat en informatique à l'Université de Turin en Italie, elle a poursuivi ses recherches en France. Elle dirige actuellement l'équipe Wimmics (Web-Instrumented Man-Machine Interactions, Communities, and Semantics) et est membre élue du Conseil Scientifique de l'Université Côte d'Azur.</p>
                    
                    <p>Ses travaux portent sur l'extraction d'arguments, la modélisation des débats en ligne, l'analyse de la persuasion et l'intégration de l'argumentation dans les systèmes d'intelligence artificielle.</p>
                    
                    <h3>Domaines de recherche</h3>
                    <div class="research-areas">
                        <span class="research-tag">Traitement Automatique du Langage</span>
                        <span class="research-tag">Systèmes d'Argumentation</span>
                        <span class="research-tag">Analyse de Débats en Ligne</span>
                        <span class="research-tag">IA Symbolique</span>
                        <span class="research-tag">Web Sémantique</span>
                        <span class="research-tag">Extraction d'Arguments</span>
                    </div>
                </div>
            </div>

            <section class="section">
                <h2>Principales réalisations</h2>
                <div class="achievements-grid">
                    <div class="achievement-card">
                        <h3>🏆 Prix de la Recherche</h3>
                        <p>Récipiendaire du prix de la meilleure chercheuse en IA de la région Côte d'Azur (2022).</p>
                    </div>
                    <div class="achievement-card">
                        <h3>📊 Projets Européens</h3>
                        <p>Coordinatrice de plusieurs projets européens (H2020, ANR) sur l'analyse automatique des débats.</p>
                    </div>
                    <div class="achievement-card">
                        <h3>📚 150+ publications</h3>
                        <p>Auteure de plus de 150 publications scientifiques dans des revues et conférences prestigieuses.</p>
                    </div>
                    <div class="achievement-card">
                        <h3>👩‍🏫 Direction d'Équipe</h3>
                        <p>Dirige l'équipe Wimmics au laboratoire I3S, comptant plus de 20 chercheurs et doctorants.</p>
                    </div>
                </div>
            </section>

            <section class="section">
                <h2>Conférence à venir</h2>
                <div style="background: #f8f9fa; padding: 1.5rem; border-radius: 10px; border: 1px solid #0056b3;">
                    <h3>« L'argumentation computationnelle : quand l'IA apprend à débattre »</h3>
                    <p><strong>Date :</strong> 14 mars 2026</p>
                    <p><strong>Horaire :</strong> 11h00 - 12h00</p>
                    <p><strong>Durée :</strong> 45 min de présentation + 15 min de Q/R</p>
                    <p>Dans cette conférence, Serena Villata présentera les avancées récentes en argumentation computationnelle, montrant comment les systèmes d'IA peuvent comprendre, générer et évaluer des arguments dans des débats complexes.</p>
                </div>
            </section>

            <section class="section">
                <h2>Publications majeures</h2>
                <ul>
                    <li>Villata, S., et al. (2021). "Advances in Computational Argumentation" - ACM Computing Surveys</li>
                    <li>Cabrio, E., & Villata, S. (2018). "Five years of argument mining: a data-driven analysis" - IJCAI</li>
                    <li>Villata, S., & Gandon, F. (2020). "Enriching debates with semantic web technologies" - Semantic Web Journal</li>
                    <li>Villata, S., et al. (2019). "Online debate analysis: from data collection to evaluation" - ACL</li>
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