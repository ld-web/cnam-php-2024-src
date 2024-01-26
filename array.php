<?php
$notes = [7, 8, 7, 12, 18, 20, 17, 18, 2, 9, 15, 4, 18, 3];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableaux</title>
</head>

<body>
    <h1>Tableaux</h1>

    <h2>For</h2>

    <?php
    for ($i = 0; $i < count($notes); $i++) {
        echo $notes[$i] . '<br />';
    }
    ?>

    <h2>While</h2>

    <?php
    $i = 0;

    while ($i < count($notes)) {
        echo $notes[$i] . '<br />';
        $i++;
    }
    ?>

    <h2>Do...while</h2>

    <?php
    $i = 0;

    do {
        echo $notes[$i] . '<br />';
        $i++;
    } while($i < count($notes));
    ?>

    <h2>Foreach</h2>

    <?php
    foreach ($notes as $index => $note) {
        echo $index . ' : ' . $note . '<br />';
    }
    ?>
</body>

</html>