<?php


function isPalindrome(int $val): bool
{
    $chars = str_split("$val");

    $left = 0;
    $right = count($chars) - 1;

    while($left <= $right) {

        if($chars[$left] != $chars[$right]) {
            return false;
        }

        $left++;
        $right--;
    }

    return true;
}

$largest = 0;

for($i=999; $i > 0; $i--) {
    for($j=999; $j > 0; $j--) {

        $product = $i * $j;

        if(isPalindrome($product)) {
            if($product > $largest) {
                $largest = $product;
            }
        }
    }
}

echo $largest;


