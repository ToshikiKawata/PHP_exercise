<?php
$num = 10;

$bool = true;
for ($i=2;$i<$num;$i++) {
if ($num%$i == 0) {
$bool = false;
break;
}}

if ($bool) {
echo $num."は素数です。";
} else {
echo $num."は素数ではありません。";
}