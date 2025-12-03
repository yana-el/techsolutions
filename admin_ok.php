<?php require_once __DIR__ . '/includes/header2.php'; 
require_once __DIR__ . '/includes/db.php';
?>

<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">

<div class="position-relative text-center">
    <img src="img/img3.png" class="img-fluid w-100" style="height:350px; object-fit:cover;">
    <div class="position-absolute top-50 start-50 translate-middle text-white">
        <h2><b>TechSolutions Admin</b></h2>
        <a>Vous êtes actuellement dans la partie admin.</a>
    </div>
</div>

<?php
$pdo = pdo();

// ID actuel = celui demandé dans l’URL, sinon on affiche le dernier
$id = $_GET['id'] ?? null;

// Si aucun ID → récupérer le plus grand ID (= dernier message)
if ($id === null) {
    $id = $pdo->query("SELECT MAX(id) FROM form")->fetchColumn();
}

// Récupération du message demandé
$stmt = $pdo->prepare("SELECT * FROM form WHERE id = :id");
$stmt->execute([':id' => $id]);
$msg = $stmt->fetch();

$prev = $pdo->prepare("SELECT id FROM form WHERE id < :id ORDER BY id DESC LIMIT 1");
$prev->execute([':id' => $id]);
$prev_id = $prev->fetchColumn();

// ID du message suivant
$next = $pdo->prepare("SELECT id FROM form WHERE id > :id ORDER BY id ASC LIMIT 1");
$next->execute([':id' => $id]);
$next_id = $next->fetchColumn();
?>
<br>
<br>
<br>
<br>
<div class="message-box">
    <p><strong>Mail :</strong> <?= htmlspecialchars($msg['mail']) ?></p>
    <p><strong>Sujet :</strong> <?= htmlspecialchars($msg['sub']) ?></p>
    <p><strong>Description :</strong><br><?= nl2br(htmlspecialchars($msg['desc'])) ?></p>

    <div class="nav">
        <?php if ($prev_id): ?>
            <a class="btn" href="?id=<?= $prev_id ?>">⬅ Précédent</a>
        <?php endif; ?>
        <?php if ($next_id): ?>
            <a class="btn" href="?id=<?= $next_id ?>">Suivant ➡</a>
        <?php endif; ?>
        
    </div>
</div>