<?php
include 'config.php';

$profiles = [
    // Enseignants
    'fernandez' => [
        'name' => 'Mme Fernandez',
        'role' => 'Superviseure de projet',
        'image' => 'assets/images/communication.jpg',
        'bio' => 'Responsable du recueil des besoins et de la correction des questions.',
        'linkedin' => 'https://linkedin.com/in/mme-fernandez', // Remplacez par la vraie URL
        'twitter' => 'https://twitter.com/mmefernandez', // Remplacez par la vraie URL
        'email' => 'marguerite.fernandez@univ-littoral.fr'
    ],
    'synave' => [
        'name' => 'Mr Synave',
        'role' => 'Superviseur technique',
        'image' => 'assets/images/matrix.jpg',
        'bio' => 'Responsable de la base de données et de l\'architecture technique.',
        'linkedin' => 'https://www.linkedin.com/in/r%C3%A9mi-synave-3a602111b/', // Remplacez par la vraie URL
        'twitter' => 'https://twitter.com/mrsynave', // Remplacez par la vraie URL
        'email' => 'remi.synave@univ-littoral.fr'
    ],
    'pacou' => [
        'name' => 'Mme Pacou',
        'role' => 'Superviseure design',
        'image' => 'assets/images/math.jpg',
        'bio' => 'Responsable des éléments de design et de l\'identité visuelle.',
        'linkedin' => 'https://www.linkedin.com/in/anne-pacou-5b5064b0/', // Remplacez par la vraie URL
        'twitter' => 'https://twitter.com/mmepacou', // Remplacez par la vraie URL
        'email' => 'Anna.Paccou@etu.univ-littoral.fr'
    ],

    // Étudiants
    'jonas' => [
        'name' => 'Jonas',
        'role' => 'Chef de projet',
        'image' => 'assets/images/Serum.jpg',
        'bio' => 'Coordination de l\'équipe et gestion des délais.',
        'linkedin' => 'https://linkedin.com/in/jonas-etudiant', // Remplacez par la vraie URL
        'twitter' => 'https://twitter.com/jonas_etudiant', // Remplacez par la vraie URL
        'email' => 'Jonas.Luap@etu.univ-littoral.fr'
    ],
    'alexandra' => [
        'name' => 'Alexandra',
        'role' => 'Designer',
        'image' => 'assets/images/cutest_cat.jpg',
        'bio' => 'Création de l\'identité visuelle et des éléments graphiques.',
        'linkedin' => 'https://linkedin.com/in/alexandra-etudiante', // Remplacez par la vraie URL
        'twitter' => 'https://twitter.com/alexandra_design', // Remplacez par la vraie URL
        'email' => 'Alexandra.Pierrot@etu.univ-littoral.fr'
    ],
    'henry' => [
        'name' => 'Henry',
        'role' => 'Développeur web',
        'image' => 'assets/images/neymartho.jpg',
        'bio' => 'Développement du site web et de l\'interface d\'administration.',
        'linkedin' => 'https://www.linkedin.com/in/henry-ghislain-undefined-518276398/', // Remplacez par la vraie URL
        'twitter' => 'https://twitter.com/henry_dev', // Remplacez par la vraie URL
        'email' => 'Henry-Ghislain.Kwizera-Irakiza@etu.univ-littoral.fr'
    ]
];

$member = $_GET['member'] ?? '';

if (!isset($profiles[$member])) {
    header('Location: equipe.php');
    exit;
}

$p = $profiles[$member];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= SITE_NAME ?> - <?= $p['name']; ?></title>
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Font Awesome pour les icônes -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Variables de couleurs rouges */
        :root {
            --primary-red: #d32f2f;
            --dark-red: #b71c1c;
            --light-red: #ff6659;
            --accent-red: #ff5252;
            --red-gradient: linear-gradient(135deg, #d32f2f 0%, #b71c1c 100%);
        }
        
        /* Header */
        header {
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        
        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 0;
        }
        
        .logo {
            display: flex;
            align-items: center;
            font-size: 1.5rem;
            font-weight: bold;
            color: var(--primary-red);
            text-decoration: none;
        }
        
        .logo img {
            max-height: 50px;
            margin-right: 10px;
        }
        
        nav ul {
            list-style: none;
            display: flex;
        }
        
        nav ul li {
            margin-left: 20px;
        }
        
        nav ul li a {
            text-decoration: none;
            color: #333;
            font-weight: 500;
            transition: color 0.3s ease;
        }
        
        nav ul li a:hover, nav ul li a.active {
            color: var(--primary-red);
        }
        
        /* Contenu principal */
        main {
            padding: 3rem 0;
            min-height: calc(100vh - 200px);
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        .profile-container {
            max-width: 800px;
            margin: 0 auto;
        }
        
        /* Photo de profil circulaire */
        .profile-photo {
            width: 250px;
            height: 250px;
            margin: 0 auto 2rem;
            position: relative;
        }
        
        .profile-photo-inner {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            overflow: hidden;
            border: 8px solid white;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            background: white;
            position: relative;
            z-index: 2;
        }
        
        .profile-photo-inner img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }
        
        .profile-photo::before {
            content: '';
            position: absolute;
            top: -10px;
            left: -10px;
            right: -10px;
            bottom: -10px;
            border-radius: 50%;
            background: linear-gradient(45deg, var(--light-red), var(--primary-red));
            z-index: 1;
            animation: rotate 10s linear infinite;
        }
        
        @keyframes rotate {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        
        /* Informations du profil */
        .profile-info {
            text-align: center;
            margin-bottom: 3rem;
        }
        
        .profile-info h1 {
            font-size: 2.8rem;
            margin-bottom: 0.5rem;
            color: var(--dark-red);
        }
        
        .profile-info h2 {
            font-size: 1.5rem;
            color: #666;
            margin-bottom: 1.5rem;
            font-weight: normal;
        }
        
        .profile-bio {
            font-size: 1.1rem;
            line-height: 1.6;
            max-width: 600px;
            margin: 0 auto 2rem;
            color: #555;
        }
        
        /* Boutons des réseaux sociaux */
        .social-links {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin: 3rem 0;
            flex-wrap: wrap;
        }
        
        .social-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            padding: 15px 30px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            min-width: 180px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            position: relative;
            overflow: hidden;
        }
        
        .social-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s ease;
        }
        
        .social-btn:hover::before {
            left: 100%;
        }
        
        .social-btn i {
            font-size: 1.3rem;
        }
        
        .btn-linkedin {
            background: linear-gradient(135deg, #d32f2f, #b71c1c);
            color: white;
        }
        
        .btn-linkedin:hover {
            background: linear-gradient(135deg, #b71c1c, #9a0007);
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(211, 47, 47, 0.4);
        }
        
        .btn-twitter {
            background: linear-gradient(135deg, #ff5252, #ff1744);
            color: white;
        }
        
        .btn-twitter:hover {
            background: linear-gradient(135deg, #ff1744, #d50000);
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(255, 82, 82, 0.4);
        }
        
        .btn-email {
            background: linear-gradient(135deg, #ff6659, #ff3d00);
            color: white;
        }
        
        .btn-email:hover {
            background: linear-gradient(135deg, #ff3d00, #dd2c00);
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(255, 102, 89, 0.4);
        }
        
        /* Bouton retour */
        .back-btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 12px 25px;
            background: #f8f9fa;
            color: var(--dark-red);
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            margin-top: 2rem;
            transition: all 0.3s ease;
            border: 2px solid var(--primary-red);
        }
        
        .back-btn:hover {
            background: var(--primary-red);
            color: white;
            transform: translateX(-5px);
        }
        
        /* Informations de contact */
        .contact-info {
            background: linear-gradient(135deg, #fff5f5, #ffeaea);
            padding: 2rem;
            border-radius: 15px;
            margin-top: 3rem;
            text-align: center;
            border-left: 5px solid var(--primary-red);
        }
        
        .contact-info h3 {
            color: var(--dark-red);
            margin-bottom: 1rem;
        }
        
        .email-link {
            display: inline-block;
            background: white;
            padding: 12px 24px;
            border-radius: 50px;
            color: var(--dark-red);
            text-decoration: none;
            font-weight: 600;
            margin-top: 1rem;
            border: 2px solid var(--light-red);
            transition: all 0.3s ease;
        }
        
        .email-link:hover {
            background: var(--primary-red);
            color: white;
            border-color: var(--primary-red);
        }
        
        /* Footer */
        footer {
            background-color: #343a40;
            color: #fff;
            text-align: center;
            padding: 2rem 0;
            margin-top: 3rem;
        }
        
        footer p {
            margin-bottom: 0.5rem;
        }
        
        footer a {
            color: #ffc107;
            text-decoration: none;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .profile-photo {
                width: 200px;
                height: 200px;
            }
            
            .profile-info h1 {
                font-size: 2.2rem;
            }
            
            .social-links {
                flex-direction: column;
                align-items: center;
            }
            
            .social-btn {
                width: 100%;
                max-width: 300px;
            }
            
            nav ul {
                flex-wrap: wrap;
                justify-content: center;
            }
            
            nav ul li {
                margin: 5px 10px;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="container header-content">
            <a href="index.php" class="logo">
                <img src="assets/images/logo.jpeg" alt="Logo Conférence IA">
            
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
            <div class="profile-container">
                <!-- Photo de profil circulaire -->
                <div class="profile-photo">
                    <div class="profile-photo-inner">
                        <img src="<?= $p['image']; ?>" alt="<?= $p['name']; ?>">
                    </div>
                </div>
                
                <!-- Informations du profil -->
                <div class="profile-info">
                    <h1><?= $p['name']; ?></h1>
                    <h2><?= $p['role']; ?></h2>
                    <p class="profile-bio"><?= $p['bio']; ?></p>
                </div>
                
                <!-- Boutons des réseaux sociaux -->
                <div class="social-links">
                    <a href="<?= $p['linkedin']; ?>" target="_blank" class="social-btn btn-linkedin">
                        <i class="fab fa-linkedin"></i> LinkedIn
                    </a>
                    
                    <a href="<?= $p['twitter']; ?>" target="_blank" class="social-btn btn-twitter">
                        <i class="fab fa-twitter"></i> Twitter
                    </a>
                    
                    <a href="mailto:<?= $p['email']; ?>" class="social-btn btn-email">
                        <i class="fas fa-envelope"></i> Email
                    </a>
                </div>
                
                <!-- Informations de contact -->
                <div class="contact-info">
                    <h3>Contact direct</h3>
                    <p>Pour contacter directement <?= $p['name']; ?> :</p>
                    <a href="mailto:<?= $p['email']; ?>" class="email-link">
                        <i class="fas fa-paper-plane"></i> <?= $p['email']; ?>
                    </a>
                </div>
                
                <!-- Bouton retour -->
                <div style="text-align: center; margin-top: 3rem;">
                    <a href="equipe.php" class="back-btn">
                        <i class="fas fa-arrow-left"></i> Retour à l'équipe
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