<?php

require_once __DIR__ . '/functions/utils.php';
require_once __DIR__ . '/classes/CategoryError.php';

if (!isset($_POST['name'])) {
    redirect('/');
}

// ['name' => $categoryName] = $_POST;
$categoryName = trim($_POST['name']);

if (empty($categoryName)) {
    redirect('/add-category.php?error=' . CategoryError::NAME_REQUIRED);
}

$dsn = 'mysql:host=127.0.0.1;port=3640;dbname=php_store;charset=utf8mb4';
$dbUser = 'root';
$dbPassword = 'mysqltests';

$pdo = new PDO($dsn, $dbUser, $dbPassword);

$stmt = $pdo->prepare("INSERT INTO category (name) VALUES (:categoryName)");
$stmt->execute(
    ['categoryName' => $categoryName]
);

if ($stmt === false) {
    echo "Erreur lors de la requête";
    exit;
}

echo "OK ! Catégorie enregistrée";