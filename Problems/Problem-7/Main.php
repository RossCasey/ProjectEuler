<?php

require_once "../../vendor/autoload.php";

use Libraries\Math;

$primeIndex = 1;

$candidate = 3;

$limit = 10001;

while($primeIndex < $limit) {

    if(Math::isPrime($candidate)) {
        $primeIndex++;
    }

    if($primeIndex < $limit) {
        $candidate += 2;
    }
}

echo $candidate;