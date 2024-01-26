<?php

echo 'Coucou le CNAM<br />';

$number = 8;
echo "Bonjour, vous êtes $number dans la classe<br />";

var_dump($number);

$number = $number + 1;
$number += 1;
$number++;

echo $number;

$i = 0;
var_dump($i++); // Affichera 0
var_dump($i); // Affichera 1

const SOFTWARE_VERSION = "1.2.0";
