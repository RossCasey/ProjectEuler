<?php

function calculateChainLength(int $val): int
{
    $length = 1;

    while($val > 1) {
        if($val % 2 === 0) {
            $val = $val / 2;
        } else {
            $val = (3 * $val) + 1;
        }
        $length++;
    }

    return $length;
}

$startingValue = 0;

$longest = -1;

for($i=0; $i < 1000000; $i++) {

    $length = calculateChainLength($i);

    if($length > $longest) {

        $longest = $length;

        $startingValue = $i;
    }
}

echo $startingValue;