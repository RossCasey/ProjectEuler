<?php

require_once "../../vendor/autoload.php";


use Brick\Math\BigInteger;


function getNumbers()
{
    $fileContents = file_get_contents('numbers.txt');

    $numbers = explode("\n", $fileContents);

    $arr = [];

    foreach ($numbers as $number) {
        array_push($arr, BigInteger::of($number));
    }

    return $arr;
}

$numbers = getNumbers();

$sum = BigInteger::of(0);

foreach ($numbers as $number) {
    $sum = $sum->plus($number);
}

echo "$sum";