<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue !</title>
    <link rel="stylesheet" href="/assets/css/index.css">
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="#">MENU ITEM</a></li>
                <li><a href="#">MENU ITEM</a></li>
                <li><a href="#">MENU ITEM</a></li>
                <li><a href="#">MENU ITEM</a></li>
                <li><a href="#">MENU ITEM</a></li>
            </ul>
        </nav>
        <?php
        session_start();
        if (isset($_SESSION['message']) && !empty($_SESSION['message'])) {
        ?>
        <div class="notification">
            <?php echo $_SESSION['message']; ?>
        </div>
        <?php
        unset($_SESSION['message']);
        } ?>
    </header>