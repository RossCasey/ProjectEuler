<?php


$evenSum = 0;

$prev = 1;

$curr = 2;

while($curr < 10000000) {

    if($curr % 2 == 0) {
        $evenSum += $curr;
    }

    $newCurr = $curr + $prev;

    $prev = $curr;

    $curr = $newCurr;
}

echo $evenSum;