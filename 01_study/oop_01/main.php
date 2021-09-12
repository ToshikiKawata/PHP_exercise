<?php

require_once __DIR__ . '/User.php';

$user = new User();

var_dump($user);
echo $user->name . '<br>';
echo $user->age . '<br>';
$user->name = 'Tom';
echo $user->name . '<br>';
// 'name' => 'Bob'

echo $user->greet('Tom');
echo $user->selfIntroduction();