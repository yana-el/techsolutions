<?php 
require_once __DIR__ . '/includes/db.php';
require_once __DIR__ . '/includes/header2.php';

// Récupération de l’objet PDO
$db = pdo();

// --- CREATION UTILISATEUR ---
if (isset($_POST['create'])) {
    $username = trim($_POST['username'] ?? '');
    $password = trim($_POST['password'] ?? '');

    if ($username !== '' && $password !== '') {
        $hash = hash('sha256', $password);
        $stmt = $db->prepare("INSERT INTO user (username, password) VALUES (?, ?)");
        $stmt->execute([$username, $hash]);
    }
}

// --- SUPPRESSION UTILISATEUR ---
if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);
    $stmt = $db->prepare("DELETE FROM user WHERE id = ?");
    $stmt->execute([$id]);
}

// --- RECUPERATION UTILISATEURS ---
$stmt = $db->query("SELECT id, username FROM user ORDER BY id ASC");
$users = $stmt->fetchAll();
?>

<div class="container mt-5">

    <h2 class="mb-3">Gestion des utilisateurs</h2>
    <hr>

    <!-- FORMULAIRE CREATION -->
    <h4>Ajouter un utilisateur</h4>

    <form method="POST" class="mb-4">
        <div class="mb-3">
            <label class="form-label">Nom d'utilisateur :</label>
            <input type="text" name="username" class="form-control" placeholder="Ex : admin2" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Mot de passe :</label>
            <input type="password" name="password" class="form-control" placeholder="Mot de passe" required>
        </div>

        <button type="submit" name="create" class="btn btn-primary">Créer</button>
    </form>

    <!-- LISTE UTILISATEURS -->
    <h4>Utilisateurs existants</h4>

    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>Nom d'utilisateur</th>
            <th>Supprimer</th>
        </tr>

        <?php if (empty($users)): ?>
            <tr><td colspan="3" class="text-center">Aucun utilisateur trouvé.</td></tr>
        <?php endif; ?>

        <?php foreach ($users as $u): ?>
        <tr>
            <td><?= e($u['id']) ?></td>
            <td><?= e($u['username']) ?></td>
            <td>
                <a href="?delete=<?= $u['id'] ?>" 
   class="btn btn-sm btn-outline-danger"
   style="padding: 2px 6px; font-size: 0.75rem;"
   onclick="return confirm('Supprimer cet utilisateur ?');">
   x
</a>

            </td>
        </tr>
        <?php endforeach; ?>

    </table>

</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
