# README.md

# Conférence IA 2026 - Site Web

## Description
Site web pour la conférence sur l'intelligence artificielle organisée par l'IUT de Calais le 12 mars 2026.

## Installation

1. Créer une base de données MySQL nommée `conference_ia`
2. Importer le fichier `database.sql` pour créer les tables nécessaires
3. Modifier le fichier `config.php` avec vos informations de connexion à la base de données
4. Placer tous les fichiers sur votre serveur web
5. Accéder au site via votre navigateur

## Structure des fichiers

- `config.php` - Configuration de la base de données et du site
- `index.php` - Page d'accueil
- `programme.php` - Programme de la conférence
- `inscription.php` - Formulaire d'inscription
- `venir.php` - Informations pour venir à l'IUT
- `contact.php` - Formulaire de contact
- `equipe.php` - Présentation de l'équipe organisatrice
- `partenaires.php` - Présentation des partenaires
- `mentions-legales.php` - Mentions légales
- `admin/` - Interface d'administration
  - `index.php` - Page de connexion admin
  - `dashboard.php` - Tableau de bord pour gérer les inscriptions
  - `logout.php` - Déconnexion
  - `style.css` - Styles spécifiques à l'admin
- `assets/`
  - `css/style.css` - Feuille de style principale
  - `images/` - Images du site
- `database.sql` - Script SQL pour créer la base de données

## Accès à l'administration

- URL: `http://votresite.com/admin/`
- Identifiant: admin
- Mot de passe: admin123

**Important**: Changez le mot de passe par défaut après la première connexion!

## Technologies utilisées

- PHP
- MySQL
- HTML5
- CSS3
- JavaScript (pour d'éventuelles améliorations futures)

## Auteurs

Équipe organisatrice de la Conférence IA 2026
Département Informatique - IUT de Calais