<?php

require_once "../../vendor/autoload.php";

use Libraries\Math;

$sum = 2; //first prime

for($i = 3; $i < 2000000; $i += 2) {
    if(Math::isPrime($i)) {
        $sum += $i;
    }
}

echo $sum;