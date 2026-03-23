<?php
// inscription.php
include 'config.php';
 $message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and retrieve form data
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $email = htmlspecialchars($_POST['email']);
    $telephone = htmlspecialchars($_POST['telephone']);
    $statut = htmlspecialchars($_POST['statut']);
    $entreprise = htmlspecialchars($_POST['entreprise']);
    $sujet_proposition = htmlspecialchars($_POST['sujet_proposition']);
    $recontact_ok = isset($_POST['recontact_ok']) ? 1 : 0;

    try {
        $sql = "INSERT INTO inscriptions (nom, prenom, email, telephone, statut, entreprise, sujet_proposition, recontact_ok) 
                VALUES (:nom, :prenom, :email, :telephone, :statut, :entreprise, :sujet_proposition, :recontact_ok)";
        $stmt = $pdo->prepare($sql);
        
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':prenom', $prenom);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':telephone', $telephone);
        $stmt->bindParam(':statut', $statut);
        $stmt->bindParam(':entreprise', $entreprise);
        $stmt->bindParam(':sujet_proposition', $sujet_proposition);
        $stmt->bindParam(':recontact_ok', $recontact_ok, PDO::PARAM_INT);

        if ($stmt->execute()) {
            $message = "<div class='alert alert-success'>Inscription réussie ! Merci de votre participation.</div>";
            // Clear form fields after successful submission
            $_POST = array();
        } else {
            $message = "<div class='alert alert-danger'>Une erreur est survenue. Veuillez réessayer.</div>";
        }
    } catch (PDOException $e) {
        // Check for duplicate email entry
        if ($e->getCode() == 23000) {
            $message = "<div class='alert alert-warning'>Cette adresse e-mail est déjà inscrite.</div>";
        } else {
            $message = "<div class='alert alert-danger'>Erreur de base de données : " . $e->getMessage() . "</div>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= SITE_NAME ?> - Inscription</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        .alert {
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid transparent;
            border-radius: 4px;
        }
        .alert-success { color: #155724; background-color: #d4edda; border-color: #c3e6cb; }
        .alert-danger { color: #721c24; background-color: #f8d7da; border-color: #f5c6cb; }
        .alert-warning { color: #856404; background-color: #fff3cd; border-color: #ffeaa7; }
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
                    <li><a href="inscription.php" class="active">Inscription</a></li>
                    <li><a href="partenaires.php">Partenaires</a></li>
                    <li><a href="equipe.php">Équipe</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <div class="container">
            <h1 class="page-title">Inscription à la Conférence</h1>
            
            <?php echo $message; ?>

            <div class="section">
                <p>L'inscription à la conférence est <strong>gratuite</strong> mais <strong>obligatoire</strong> en raison du nombre de places limitées. Merci de remplir le formulaire ci-dessous.</p>
                
                <form action="inscription.php" method="POST" class="registration-form">
                    <div class="grid">
                        <div class="form-group">
                            <label for="nom">Nom *</label>
                            <input type="text" id="nom" name="nom" class="form-control" required value="<?= isset($_POST['nom']) ? $_POST['nom'] : '' ?>">
                        </div>
                        <div class="form-group">
                            <label for="prenom">Prénom *</label>
                            <input type="text" id="prenom" name="prenom" class="form-control" required value="<?= isset($_POST['prenom']) ? $_POST['prenom'] : '' ?>">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Adresse E-mail *</label>
                        <input type="email" id="email" name="email" class="form-control" required value="<?= isset($_POST['email']) ? $_POST['email'] : '' ?>">
                    </div>

                    <div class="form-group">
                        <label for="telephone">Numéro de téléphone</label>
                        <input type="tel" id="telephone" name="telephone" class="form-control" value="<?= isset($_POST['telephone']) ? $_POST['telephone'] : '' ?>">
                    </div>

                    <div class="grid">
                        <div class="form-group">
                            <label for="statut">Statut / Métier</label>
                            <input type="text" id="statut" name="statut" class="form-control" value="<?= isset($_POST['statut']) ? $_POST['statut'] : '' ?>">
                        </div>
                        <div class="form-group">
                            <label for="entreprise">Entreprise / Organisation</label>
                            <input type="text" id="entreprise" name="entreprise" class="form-control" value="<?= isset($_POST['entreprise']) ? $_POST['entreprise'] : '' ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="sujet_proposition">Idées ou propositions de sujets (optionnel)</label>
                        <textarea id="sujet_proposition" name="sujet_proposition" class="form-control" rows="4"><?= isset($_POST['sujet_proposition']) ? $_POST['sujet_proposition'] : '' ?></textarea>
                    </div>
                    
                    <div class="form-group">
                        <input type="checkbox" id="recontact_ok" name="recontact_ok" value="1" <?= isset($_POST['recontact_ok']) ? 'checked' : '' ?>>
                        <label for="recontact_ok">J'accepte d'être recontacté pour de futurs événements ou des propositions de partenariat.</label>
                    </div>
                    
                    <p><small>* Champs obligatoires</small></p>
                    
                    <button type="submit" class="btn btn-primary">S'inscrire</button>
                </form>
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