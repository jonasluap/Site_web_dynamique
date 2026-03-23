<?php
// equipe.php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= SITE_NAME ?> - Équipe Organisatrice</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        .section h2{
            text-align: center;
        }
        .team-grid {
            display: flex;
            justify-content: space-between;
            gap: 10px;
            flex-wrap: wrap;
        }
        .team-member {
            width: 300px;
            cursor: pointer;
            text-align: center;
            background: #fff;
            padding: 1.5rem;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            text-decoration: none;
            color: inherit;
            display: block;
        }
        .team-member:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        .member-photo {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            overflow: hidden;
            margin: 0 auto 1rem;
            border: 4px solid var(--primary-color);
        }
        .member-photo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .member-title {
            color: var(--primary-color);
            font-weight: bold;
            margin-bottom: 0.5rem;
        }
        .member-description {
            font-size: 0.9rem;
            color: #666;
        }
        @media (max-width: 1024px) {
            .team-grid {
                justify-content: center;
            }
            .team-member {
                width: 280px;
            }
        }
        @media (max-width: 768px) {
            .team-grid {
                flex-direction: column;
                align-items: center;
            }
            .team-member {
                width: 100%;
                max-width: 350px;
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
                    <li><a href="equipe.php" class="active">Équipe</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <div class="container">
            <h1 class="page-title">L'Équipe Organisatrice</h1>
            
            <div class="section">
                <p>La conférence IA 2026 est organisée par une équipe passionnée d'étudiants et d'enseignants du département informatique de l'IUT de Calais.</p>
            </div>

            <div class="section">
                <h2>Enseignants Superviseurs</h2>
                <div class="team-grid">
                    <!-- Mme Fernandez -->
                    <a href="profil.php?member=fernandez" class="team-member">
                        <div class="member-photo">
                            <img src="assets/images/communication.jpg" alt="Mme Fernandez">
                        </div>
                        <h3>Mme Fernandez</h3>
                        <p class="member-title">Superviseure de projet</p>
                        <p class="member-description">Responsable du recueil des besoins et de la correction des questions.</p>
                    </a>
                    
                    <!-- Mr Synave -->
                    <a href="profil.php?member=synave" class="team-member">
                        <div class="member-photo">
                            <img src="assets/images/matrix.jpg" alt="Mr Synave">
                        </div>
                        <h3>Mr Synave</h3>
                        <p class="member-title">Superviseur technique</p>
                        <p class="member-description">Responsable de la base de données et de l'architecture technique.</p>
                    </a>
                    
                    <!-- Mme Pacou -->
                    <a href="profil.php?member=pacou" class="team-member">
                        <div class="member-photo">
                            <img src="assets/images/math.jpg" alt="Mme Pacou">
                        </div>
                        <h3>Mme Pacou</h3>
                        <p class="member-title">Superviseure design</p>
                        <p class="member-description">Responsable des éléments de design et de l'identité visuelle.</p>
                    </a>
                </div>
            </div>

            <div class="section">
                <h2>Équipe Étudiante</h2>
                <div class="team-grid">
                    <!-- Jonas -->
                    <a href="profil.php?member=jonas" class="team-member">
                        <div class="member-photo">
                            <img src="assets/images/Serum.jpg" alt="Jonas">
                        </div>
                        <h3>Jonas</h3>
                        <p class="member-title">Chef de projet</p>
                        <p class="member-description">Coordination de l'équipe et gestion des délais.</p>
                    </a>
                    
                    <!-- Alexandra -->
                    <a href="profil.php?member=alexandra" class="team-member">
                        <div class="member-photo">
                            <img src="assets/images/cutest_cat.jpg" alt="Alexandra">
                        </div>
                        <h3>Alexandra</h3>
                        <p class="member-title">Designer</p>
                        <p class="member-description">Création de l'identité visuelle et des éléments graphiques.</p>
                    </a>
                    
                    <!-- Henry -->
                    <a href="profil.php?member=henry" class="team-member">
                        <div class="member-photo">
                            <img src="assets/images/neymartho.jpg" alt="Henry">
                        </div>
                        <h3>Henry</h3>
                        <p class="member-title">Développeur web</p>
                        <p class="member-description">Développement du site web et de l'interface d'administration.</p>
                    </a>
                </div>
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