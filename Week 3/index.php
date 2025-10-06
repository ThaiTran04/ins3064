<?php


function sum($a, $b) {
    return $a + $b;
}
 $sum = sum(4, 5);
echo("tổng của 2 số là ". $sum);
echo("<br>");
function swap($a, $b) {
    $temp = $a;
    $a = $b;
    $b = $temp;

    echo("<br>After swap <br>");
    echo("Number a is " . $a);
    echo("<br>");
    echo("Number b is " . $b);
}

$a = 5;
$b = 6;
echo("Number a is " . $a);
echo("<br>");
echo("Number b is " . $b);
swap($a, $b);
?>
