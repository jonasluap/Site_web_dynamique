<?php
// admin/dashboard.php
session_start();
// Check if admin is logged in
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: index.php");
    exit();
}

include '../config.php';
 $registrations = [];

try {
    $sql = "SELECT * FROM inscriptions ORDER BY date_inscription DESC";
    $stmt = $pdo->query($sql);
    $registrations = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    $error_message = "Erreur lors de la récupération des inscriptions: " . $e->getMessage();
}

// Handle deletion
if (isset($_GET['delete_id'])) {
    $id = $_GET['delete_id'];
    try {
        $sql = "DELETE FROM inscriptions WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        header("Location: dashboard.php?msg=deleted");
        exit();
    } catch (PDOException $e) {
        $error_message = "Erreur lors de la suppression: " . $e->getMessage();
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration - Tableau de bord</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="admin-container">
        <header class="admin-header">
            <h1>Tableau de bord</h1>
            <p>Bienvenue, <?php echo htmlspecialchars($_SESSION['admin_username']); ?>.</p>
            <a href="logout.php" class="btn btn-danger">Déconnexion</a>
        </header>

        <main class="admin-main">
            <section class="stats">
                <h2>Statistiques</h2>
                <div class="stat-card">
                    <h3>Total des inscrits</h3>
                    <p><?php echo count($registrations); ?></p>
                </div>
            </section>

            <section class="registrations-table">
                <h2>Liste des Inscriptions</h2>
                <?php if (isset($_GET['msg']) && $_GET['msg'] == 'deleted'): ?>
                    <p class="success-message">Inscription supprimée avec succès.</p>
                <?php endif; ?>
                <?php if (isset($error_message)): ?>
                    <p class="error-message"><?php echo $error_message; ?></p>
                <?php endif; ?>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Email</th>
                            <th>Téléphone</th>
                            <th>Statut</th>
                            <th>Entreprise</th>
                            <th>Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (empty($registrations)): ?>
                            <tr>
                                <td colspan="9">Aucune inscription pour le moment.</td>
                            </tr>
                        <?php else: ?>
                            <?php foreach ($registrations as $reg): ?>
                                <tr>
                                    <td><?= $reg['id'] ?></td>
                                    <td><?= htmlspecialchars($reg['nom']) ?></td>
                                    <td><?= htmlspecialchars($reg['prenom']) ?></td>
                                    <td><?= htmlspecialchars($reg['email']) ?></td>
                                    <td><?= htmlspecialchars($reg['telephone']) ?></td>
                                    <td><?= htmlspecialchars($reg['statut']) ?></td>
                                    <td><?= htmlspecialchars($reg['entreprise']) ?></td>
                                    <td><?= date('d/m/Y H:i', strtotime($reg['date_inscription'])) ?></td>
                                    <td>
                                        <a href="?delete_id=<?= $reg['id'] ?>" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette inscription ?');">Supprimer</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </section>
        </main>
    </div>
</body>
</html>