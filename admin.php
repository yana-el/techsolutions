<?php
require_once __DIR__ . '/includes/db.php';
require_once __DIR__ . '/includes/header.php';
$url = "admin.php";
?>

<form action="" method="post">
        <input type="text" name="username" placeholder="Utilisateur">
        <input type="password" name="password" placeholder="Mot de passe">
        <button type="submit">Se connecter</button>
        <?php
        
        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';
        $hash = hash('sha256', $password);
        $pdo = pdo();
        $pcs = pdo()->query('SELECT id, username, password FROM user ORDER BY id')->fetchAll();
        $stmt = $pdo->prepare("SELECT id, password FROM user WHERE username = :username LIMIT 1");
        $stmt->execute([':username' => $username]);

        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($user) {
                echo "L'utilisateur '$username' a pour ID : " . $user['id'] . " et le hash: " . $user['password'];
                } else {
                echo "Aucun utilisateur trouvé avec le nom '$username'.";
                }
        
        if($hash == $user['password']) {
                echo " <br>Mot de passe correcte";
                $acces = "oui";
        } else {
                echo " <br>Mot de passe incorrecte";
                echo "<br>$hash";
                $acces = "non";
        }
        if ($acces == "oui") {
                $url = "contact_ok.php";
                } else {
                $url = "admin.php";
                }
        ?>
        
</form>
<button type="button" onclick="window.location.href='<?= $url ?>'">Accéder</button>
