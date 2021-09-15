<?php

$num1 = $_GET["num1"];
$num2 = $_GET["num2"];
$operator = $_GET["operator"];

if ($operator == 'addition') {
    $ans = $num1 + $num2;
    echo($num1." + ".$num2." = ".$ans);
} elseif ($operator == 'subtraction') {
    $ans = $num1 - $num2;
    echo($num1." - ".$num2." = ".$ans);
} elseif ($operator == 'multiplication') {
    $ans = $num1 * $num2;
    echo($num1." * ".$num2." = ".$ans);
} elseif ($operator == 'division') {
    $ans = $num1 / $num2;
    echo($num1." / ".$num2." = ".$ans);
} else {
    echo '正しい演算子を指定してください';
}