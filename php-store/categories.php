<?php require_once __DIR__ . '/layout/header.php'; ?>

<h1>Catégories</h1>

<?php

[
    'HOST' => $dbHost,
    'PORT' => $dbPort,
    'DB_NAME' => $dbName,
    'CHARSET' => $dbCharset,
    'USER' => $dbUser,
    'PASSWORD' => $dbPassword
] = parse_ini_file(__DIR__ . '/config/db.ini');

$dsn = "mysql:host=$dbHost;port=$dbPort;dbname=$dbName;charset=$dbCharset";

$pdo = new PDO($dsn, $dbUser, $dbPassword);
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