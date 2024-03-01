<?php

require_once __DIR__ . '/classes/Database.php';
require_once __DIR__ . '/functions/utils.php';
require_once __DIR__ . '/classes/ProductError.php';

if (!isset($_POST['name']) || !isset($_POST['price']) || !isset($_POST['cover']) || !isset($_POST['description']) || !isset($_POST['category'])) {
    redirect('/');
}

$productName = trim($_POST['name']);
$productPrice = trim($_POST['price']);
$productCover = trim($_POST['cover']);
$productDescription = trim($_POST['description']);
$productCategory = $_POST['category'];

if (empty($productName)) {
    redirect('/add-category.php?error=' . ProductError::NAME_REQUIRED);
}
if (empty($productPrice)) {
    redirect('/add-category.php?error=' . ProductError::PRICE_REQUIRED);
}
if (empty($productCover)) {
    redirect('/add-category.php?error=' . ProductError::COVER_REQUIRED);
}
if (empty($productDescription)) {
    redirect('/add-category.php?error=' . ProductError::DESCRIPTION_REQUIRED);
}

try {
    $pdo = Database::getConnection();
} catch(PDOException $ex) {
    echo "Erreur lors de la connexion à la base de données";
    exit;
}

$stmt = $pdo->prepare("INSERT INTO product (name, price_vat_free, cover, description, category_id) VALUES (:productName, :productPrice, :productCover, :productDescription, :productCategory)");
$stmt->execute([
    'productName' => $productName,
    'productPrice' => $productPrice,
    'productCover' => $productCover,
    'productDescription' => $productDescription,
    'productCategory' => $productCategory
]);

if ($stmt === false) {
    echo "Erreur lors de la requête";
    exit;
}

session_start();
$_SESSION['message'] = "Le produit a bien été enregistré";

redirect('/');