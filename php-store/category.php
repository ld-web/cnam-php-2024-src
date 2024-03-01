<?php
require_once __DIR__ . '/classes/Categories.php';
require_once __DIR__ . '/layout/header.php';

$id = intval($_GET['id']); // TODO: Vérifier que la clé 'id' existe

$categoriesDb = new Categories();
$category = $categoriesDb->find($id);

if ($category === null) {
    http_response_code(404);
    echo "Catégorie non trouvée";
    exit;
}
?>

<h1><?php echo $category['name']; ?></h1>

<?php require_once __DIR__ . '/layout/footer.php';