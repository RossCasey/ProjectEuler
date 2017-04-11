<?php

function sumN(int $n): int
{
    $sum = 0;

    for($i=0; $i <= $n; $i++) {
        $sum += $i;
    }

    return $sum;
}


function sumNSq(int $n): int
{
    $sum = 0;

    for($i=0; $i <= $n; $i++) {
        $sum += ($i * $i);
    }

    return $sum;
}

$sum = sumN(100);

$sumSq = $sum * $sum;

$sqSum = sumNSq(100);

$diff = abs($sqSum - $sumSq);

echo $diff;

