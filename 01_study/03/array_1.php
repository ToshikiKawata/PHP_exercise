<?php

# PHP5.4以降
$members = ['Bob', 'Tom', 'Ken'];


echo $members[0] . '<br>';

echo $members[1] . '<br>';

echo $members[2] . '<br>';

echo $members; // これでは Array と表示されるだけ


// 配列を使わない場合は1つ1つ変数を用意しなければいけません
$member_1 = 'Bob';
$member_2 = 'Tom';
$member_3 = 'Ken';
