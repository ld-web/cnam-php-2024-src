<?php
require_once __DIR__ . '/functions/error.php';
require_once __DIR__ . '/layout/header.php';
?>

<main>
    <h1>Nouvelle catégorie</h1>

    <?php if (isset($_GET['error'])) { ?>
    <p style="color: white; background-color: red;">
        <?php echo categoryErrorMessage(intval($_GET['error'])); ?>
    </p>
    <?php } ?>

    <form action="add-category-process.php" method="POST">
        <div>
            <label for="name">Nom :</label>
            <input type="text" name="name" id="name" />
        </div>
        <div>
            <input type="submit" value="Enregistrer" />
        </div>
    </form>
</main>

<?php require_once __DIR__ . '/layout/footer.php'; ?>