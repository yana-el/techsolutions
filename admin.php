<?php
require_once __DIR__ . '/includes/db.php';
require_once __DIR__ . '/includes/header.php';
$url = "admin.php";
?>

<form action="" method="post">
        <input class="champuser" type="text" name="username" placeholder="Utilisateur">
        <input class="champmdp" type="password" name="password" placeholder="Mot de passe">
        <button class="btnmdp" type="submit">Se connecter</button>
        <?php
        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';
        $hash = hash('sha256', $password);
        $pdo = pdo();
        $pcs = pdo()->query('SELECT id, username, password FROM user ORDER BY id')->fetchAll();
        $stmt = $pdo->prepare("SELECT id, password FROM user WHERE username = :username LIMIT 1");
        $stmt->execute([':username' => $username]);

        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if (!$user) {
                return;
        }

        if($hash == $user['password']) {
                echo " <br>Mot de passe correcte";
                $acces = "oui";
        } else {
                echo " <br>Mot de passe incorrecte";
        }
        if ($acces == "oui") {
                header('Location: http://localhost/sitetechsolution/admin_ok.php');
                exit();

        }
        ?>
</form>