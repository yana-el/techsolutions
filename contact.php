<?php 
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/db.php';
?>

<form action="" method="post">
    <input class="champ1" type="text" name="mail" placeholder="Adresse Email">
    <input class="champ1" type="text" name="subject" placeholder="Sujet">
    <textarea name="description" class="desc"></textarea>
    <button class="btnmdp" type="submit">Envoyer</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $mail = $_POST['mail'] ?? '';
    $sub  = $_POST['subject'] ?? '';
    $desc = $_POST['description'] ?? '';

    if (!empty($mail) && !empty($sub) && !empty($desc)) {

        $pdo = pdo();

        $sql = "INSERT INTO form (mail, sub, `desc`) 
                VALUES (:mail, :sub, :desc)";

        $stmt = $pdo->prepare($sql);

        $stmt->execute([
            ':mail' => $mail,
            ':sub'  => $sub,
            ':desc' => $desc
        ]);

        echo "<p class='champuser' style='color:green;'>Message envoyé !</p>";

    } else {
        echo "<p class='champuser' style='color:red;'>Merci de remplir tous les champs.</p>";
    }
}
?>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php require_once __DIR__ . '/includes/footer.php'; ?>