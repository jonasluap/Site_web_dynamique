<?php
// partenaires.php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= SITE_NAME ?> - Partenaires</title>
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
                    <li><a href="partenaires.php" class="active">Partenaires</a></li>
                    <li><a href="equipe.php">Équipe</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <div class="container">
            <h1 class="page-title">Nos Partenaires</h1>
            
            <div class="section">
                <p>Nous remercions chaleureusement nos partenaires qui rendent cet événement possible. Leur soutien nous permet d'organiser une conférence de qualité et accessible à tous.</p>
            </div>

            <div class="section">
                <h2>Partenaires Principaux</h2>
                <div class="partners-grid">
                    <a href="https://www.iut-littoral.fr/" target="_blank" class="partner-link">
                        <div class="partner">
                            <div class="partner-logo">
                                <img src="assets/images/iutlittoral-logo.jpg" alt="IUT de Calais">
                            </div>
                            <h3>IUT de Calais</h3>
                            <p>Hôte de l'événement et partenaire institutionnel, l'IUT de Calais met à disposition ses installations et son expertise pour assurer le bon déroulement de la conférence.</p>
                        </div>
                    </a>
                    <a href="https://lisic-prod.univ-littoral.fr/" target="_blank" class="partner-link">
                        <div class="partner">
                            <div class="partner-logo">
                                <img src="assets/images/6_logo-lisic.png" alt="Laboratoire LISIC">
                            </div>
                            <h3>Laboratoire LISIC</h3>
                            <p>Le Laboratoire d'Informatique Signal et Image de la Côte d'Opale apporte son soutien scientifique et technique à notre événement.</p>
                        </div>
                    </a>
                    <a href="https://www.univ-littoral.fr/" target="_blank" class="partner-link">
                        <div class="partner">
                            <div class="partner-logo">
                                <img src="assets/images/ulco-logo.png" alt="Université du Littoral Côte d'Opale">
                            </div>
                            <h3>Université du Littoral Côte d'Opale</h3>
                            <p>L'ULCO soutient cette initiative qui s'inscrit dans sa mission de diffusion de la connaissance et de rapprochement entre le monde académique et le monde professionnel.</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="section">
                <h2>Partenaires Associés</h2>
                <div class="partners-grid">
                    <a href="https://societe-informatique-de-france.fr/" target="_blank" class="partner-link">
                        <div class="partner">
                            <div class="partner-logo">
                                <img src="assets/images/l-sif.png" alt="PRODIF(SIF)">
                            </div>
                            <h3>PRODIF(SIF)</h3>
                            <p>L'association des chefs de département informatique de France nous apporte son soutien réseau et son expertise sur les formations en informatique.</p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="section section1">
                <h2 id="conf">Les Conférenciers</h2>
                 <div class="conf-part">
                    <div class="partners-grid">
                        <a href="serena.php" class="partner-link">
                            <div class="partner">
                                <div class="partner-logo">
                                    <img src="assets/images/serena-villata.jpeg" alt="Serena Villata">
                                </div>
                                <h3>Serena Villata</h3>
                                <p>Directrice de Recherche CNRS au laboratoire I3S (CNRS/Université Côte d'Azur). Experte en Traitement Automatique du Langage Naturel, Argumentation et IA Symbolique.</p>
                                <p class="click-info">Cliquez pour plus d'informations →</p>
                            </div>
                        </a>
                    </div>
                 <div class="partners-grid">
                        <a href="luc.php" class="partner-link">
                            <div class="partner">
                                <div class="partner-logo">
                                    <img src="assets/images/luc-julia.jpeg" alt="Luc Julia">
                                </div>
                                <h3>Luc Julia</h3>
                                <p>Co-créateur de Siri, Directeur Scientifique Renault. Pionnier de l'IA conversationnelle et des interfaces vocales intelligentes.</p>
                                <p class="click-info">Cliquez pour plus d'informations →</p>
                            </div>
                        </a>
                    </div>
                 </div>
            </div>

            <div class="section">
                <h2>Devenir Parteneur</h2>
                <p>Vous souhaitez soutenir notre événement et bénéficier d'une visibilité auprès d'un public passionné par l'intelligence artificielle ? Plusieurs options de partenariat sont possibles :</p>
                <ul>
                    <li>Partenariat financier</li>
                    <li>Mise à disposition de ressources matérielles</li>
                    <li>Intervention en tant que conférencier</li>
                    <li>Communication croisée</li>
                </ul>
                <p>Pour toute proposition de partenariat, merci de nous contacter via <a href="contact.php">notre formulaire de contact</a>.</p>
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
        .partners-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }
        .partner {
            background: #fff;
            padding: 1.5rem;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            transition: transform 0.3s ease;
        }
        .partner:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.15);
        }
        .partner-logo {
            height: 120px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1rem;
        }
        .partner-logo img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
        }
        .partner h3 {
            color: var(--primary-color);
            margin-bottom: 1rem;
        }
        .section1{
            display: flex;
            flex-direction: column;
        }
        .conf-part{
            display: flex;
            flex-direction: row;
        }
        #conf{
            text-align: center;
        }
        .partner-link {
            text-decoration: none;
            color: inherit;
            display: block;
        }
        .click-info {
            color: #4a6bdf;
            font-weight: 600;
            margin-top: 1rem;
            font-size: 0.9rem;
        }
    </style>
</body>
</html>