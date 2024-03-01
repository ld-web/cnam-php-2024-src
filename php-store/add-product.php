<?php
require_once __DIR__ . '/classes/Categories.php';
require_once __DIR__ . '/layout/header.php';
?>

<main>
    <h1>Nouveau produit</h1>

    <?php if (isset($_GET['error'])) { ?>
    <p style="color: white; background-color: red;">
        <?php echo categoryErrorMessage(intval($_GET['error'])); ?>
    </p>
    <?php } ?>

    <?php
    $categoriesDb = new Categories();
    $categories = $categoriesDb->findAll();
    ?>

    <form action="add-product-process.php" method="POST">
        <div>
            <label for="name">Nom :</label>
            <input type="text" name="name" id="name" />
        </div>
        <div>
            <label for="price">Prix :</label>
            <input type="text" name="price" id="price" />
        </div>
        <div>
            <label for="cover">Image :</label>
            <input type="text" name="cover" id="cover" />
        </div>
        <div>
            <label for="description">Description :</label>
            <textarea name="description" id="description" cols="30" rows="10"></textarea>
        </div>
        <div>
            <select name="category" id="category">
                <option value="0">--- Choisissez une catégorie ---</option>
                <?php foreach ($categories as $category) { ?>
                <option value="<?php echo $category['id']; ?>">
                    <?php echo $category['name']; ?>
                </option>
                <?php } ?>
            </select>
        </div>
        <div>
            <input type="submit" value="Enregistrer" />
        </div>
    </form>
</main>

<?php require_once __DIR__ . '/layout/footer.php'; ?>