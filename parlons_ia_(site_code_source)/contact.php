<?php
// contact.php
include 'config.php';
$message = '';
$message_class = ''; // For styling success/error messages

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 1. Sanitize and retrieve form data
    $nom = htmlspecialchars(trim($_POST['nom']));
    $prenom = htmlspecialchars(trim($_POST['prenom'])); // We'll handle this separately
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $sujet = htmlspecialchars(trim($_POST['sujet'])); // We'll add this to the message
    $message_text = htmlspecialchars(trim($_POST['message']));
    $consent = isset($_POST['consent']) ? 1 : 0; // Checkbox for consent

    // 2. Combine first and last name for the database
    $nom_complet = $nom . ' ' . $prenom;
    
    // 3. Add the subject to the message body for storage
    $full_message = "Sujet: " . $sujet . "\n\n" . $message_text;

    // 4. INSERT the data into the database
    try {
        $sql = "INSERT INTO messages_contact (nom, email, message, consent) 
                VALUES (:nom, :email, :message, :consent)";
        
        $stmt = $pdo->prepare($sql);
        
        // Bind parameters to prevent SQL injection
        $stmt->bindParam(':nom', $nom_complet, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':message', $full_message, PDO::PARAM_STR);
        $stmt->bindParam(':consent', $consent, PDO::PARAM_INT);
        
        // Execute the query
        if ($stmt->execute()) {
            $message = "Votre message a été envoyé et sauvegardé avec succès. Nous vous répondrons dans les plus brefs délais.";
            $message_class = 'alert-success';
        } else {
            $message = "Une erreur est survenue lors de l'enregistrement. Veuillez réessayer.";
            $message_class = 'alert-error';
        }
    } catch(PDOException $e) {
        $message = "Erreur système: " . $e->getMessage();
        $message_class = 'alert-error';
        // For debugging only - remove in production
        error_log("Database error in contact.php: " . $e->getMessage());
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= SITE_NAME ?> - Contact</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        .alert {
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid transparent;
            border-radius: 4px;
        }
        .alert-success { color: #155724; background-color: #d4edda; border-color: #c3e6cb; }
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
                    <li><a href="contact.php" class="active">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <div class="container">
            <h1 class="page-title">Contactez-nous</h1>
            
            <?php echo $message; ?>

            <div class="section">
                <div class="grid">
                    <div>
                        <h2>Formulaire de contact</h2>
                        <p>Vous avez une question ou une suggestion ? N'hésitez pas à nous contacter en utilisant le formulaire ci-dessous.</p>
                        
                        <form action="contact.php" method="POST" class="contact-form">
                            <div class="form-group">
                                <label for="nom">Nom *</label>
                                <input type="text" id="nom" name="nom" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="prenom">Prénom *</label>
                                <input type="text" id="prenom" name="prenom" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Adresse E-mail *</label>
                                <input type="email" id="email" name="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="sujet">Sujet *</label>
                                <input type="text" id="sujet" name="sujet" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="message">Message *</label>
                                <textarea id="message" name="message" class="form-control" rows="5" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Envoyer</button>
                        </form>
                    </div>
                    <div>
                        <h2>Informations de contact</h2>
                        <div class="contact-info">
                            <p><strong>Adresse :</strong><br>
                            GRAND AMPHI IUT DE CALAIS<br>
                            Département Informatique<br>
                           19 Rue Louis David<br>
                           62100 Calais</p>
                            
                            <p><strong>Email :</strong><br>
                            <a href="mailto:parlons-ia@iut-calais.univ-littoral.fr">parlons-ia@iut-calais.univ-littoral.fr</a></p>
                            
                            <p><strong>Téléphone :</strong><br>
                            +33 0 00 00 00 00</p>
                        </div>
                    </div>
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