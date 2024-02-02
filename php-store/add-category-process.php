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

$stmt = $pdo->prepare("INSERT INTO category (name) VALUES (:categoryName)");
$stmt->execute(
    ['categoryName' => $categoryName]
);

if ($stmt === false) {
    echo "Erreur lors de la requête";
    exit;
}

echo "OK ! Catégorie enregistrée";