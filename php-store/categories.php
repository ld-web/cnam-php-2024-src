<?php
require_once __DIR__ . '/classes/Categories.php';
require_once __DIR__ . '/layout/header.php';
?>

<h1>Catégories</h1>

<?php
$categoriesDb = new Categories();
$categories = $categoriesDb->findAll();
?>

<div class="list-container">
    <div class="list-header">
        <div>ID</div>
        <div>Nom</div>
    </div>

    <?php foreach ($categories as $category) { ?>
    <div class="category-item">
        <div><?php echo $category['id']; ?></div>
        <div><a href="/category.php?id=<?php echo $category['id']; ?>"><?php echo $category['name']; ?></a></div>
    </div>
    <?php } ?>
</div>

<?php require_once __DIR__ . '/layout/footer.php'; ?>