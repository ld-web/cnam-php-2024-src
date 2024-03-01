<?php
require_once __DIR__ . '/classes/Database.php';
require_once __DIR__ . '/layout/header.php';
?>

<h1>Catégories</h1>

<?php

try {
    $pdo = Database::getConnection();
} catch (PDOException $ex) {
    echo "Erreur lors de la connexion à la base de données";
    exit;
}

$stmt = $pdo->query("SELECT * FROM category");
?>

<div class="list-container">
    <div class="list-header">
        <div>ID</div>
        <div>Nom</div>
    </div>

    <?php while ($category = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
    <div class="category-item">
        <div><?php echo $category['id']; ?></div>
        <div><?php echo $category['name']; ?></div>
    </div>
    <?php } ?>
</div>

<?php require_once __DIR__ . '/layout/footer.php'; ?>