<?php

require_once __DIR__ . '/classes/Database.php';
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

try {
    $pdo = Database::getConnection();
} catch (PDOException $ex) {
    echo "Erreur lors de la connexion à la base de données";
    exit;
}

$stmt = $pdo->prepare("INSERT INTO category (name) VALUES (:categoryName)");
$stmt->execute(
    ['categoryName' => $categoryName]
);

if ($stmt === false) {
    echo "Erreur lors de la requête";
    exit;
}

session_start();
$_SESSION['message'] = "La catégorie a bien été enregistrée";

redirect('/');