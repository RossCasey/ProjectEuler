<?php


function isPythagoreanTriplet(int $a, int $b, int $c): bool
{
    if(($b <= $a) || ($c <= $b)) {
        return false;
    }

    return (($a * $a) + ($b * $b) === ($c * $c));
}

$found = false;

for($c=3; $c < 1000 && ! $found; $c++) {
    for($b=2; $b < $c && ! $found; $b++) {
        for($a=1; $a < $b && ! $found; $a++) {
            if(isPythagoreanTriplet($a, $b, $c) && ($a + $b + $c === 1000)) {
                echo "a: $a, b: $b, c: $c\n";
                echo "prod: " . ($a * $b * $c) . "\n";
                $found = true;
            }
        }
    }
}