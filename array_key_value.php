<?php

$user = [
    'name' => 'Danny'
];

echo $user['name'];

$users = [
    $user,
    ['name' => 'Perry'],
    ['name' => 'Allen'],
    ['name' => 'Harrington'],
    ['name' => 'Ellis'],
    ['name' => 'Craig'],
    ['name' => 'Gutierrez'],
    ['name' => 'Ballard'],
    ['name' => 'Ross'],
];

var_dump($users);

var_dump(json_encode($user));