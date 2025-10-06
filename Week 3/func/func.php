<?php
function swap($a, $b) {
    $temp = $a;
    $a = $b;
    $b = $temp;

    echo("<br>After swap <br>");
    echo("Number a is " . $a);
    echo("<br>");
    echo("Number b is " . $b);
}
?>