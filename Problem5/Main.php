<?php

function isDivisible(int $val): bool
{
    for($i=1; $i <= 20; $i++) {
        if($val % $i !== 0) {
            return false;
        }
    }

    return true;
}

$limit = 2432902008176640000;

$found = false;

for($i=20; $i < $limit && ( ! $found); $i += 10) {

    if(isDivisible($i)) {
        $found = true;
        echo $i;
    }

}