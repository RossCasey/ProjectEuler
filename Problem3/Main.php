<?php

require_once "../vendor/autoload.php";

use Libraries\Math;

$numberToFactorise = 600851475143;

$candidate = intval(ceil(sqrt($numberToFactorise)));

$found = false;

while( ! $found) {

    if(($numberToFactorise % $candidate === 0) && (Math::isPrime($candidate))) {
        $found = true;
    } else {
        $candidate -= 2;
    }
}

echo $candidate;
