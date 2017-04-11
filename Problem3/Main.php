<?php


function isPrime(int $val): bool
{
    $limit = intval(ceil(sqrt($val)));

    for($i=2; $i < $limit; $i++) {
        if($val % $i === 0) {
            return false;
        }
    }

    return true;
}

$numberToFactorise = 600851475143;

$candidate = intval(ceil(sqrt($numberToFactorise)));

$found = false;

while( ! $found) {

    if(($numberToFactorise % $candidate === 0) && (isPrime($candidate))) {
        $found = true;
    } else {
        $candidate -= 2;
    }
}

echo $candidate;
