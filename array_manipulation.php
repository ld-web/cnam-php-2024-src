<?php

$tab = [1, 2, 3];
$tab2 = [4, 5, 6];

$tab3 = $tab + $tab2;

var_dump($tab3);

[$first, $second] = $tab;
var_dump($first, $second);

[2 => $third] = $tab2;
var_dump($third);

$fullTab = [...$tab, ...$tab2];
var_dump($fullTab);

var_dump($tab);
$tab = [...$tab, 8];
$tab[] = 45;
var_dump($tab);

array_pop($tab); // Impératif

$notes = [7, 8, 7, 12, 18, 20, 17, 18, 2, 9, 15, 4, 18, 3];
var_dump($notes);
sort($notes);
var_dump($notes);