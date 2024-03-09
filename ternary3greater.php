<?php
$a = 10;
$b = 15;
$c = 20;

$gteater = ($a > $b) ? (($a > $c) ? $a : $c) : (($b > $c) ? $b : $c);

echo "The greatest number is: " . $gteater;
