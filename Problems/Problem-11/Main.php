<?php


require_once "../../vendor/autoload.php";


use Problems\Problem11\Src\Grid;
use Problems\Problem11\Src\Point;


function convertTo2dArray(string $data, string $columnDelimiter, string $lineDelimiter): array
{
    $array = [];

    $lines = explode($lineDelimiter, $data);

    foreach ($lines as $line) {
        array_push($array, explode($columnDelimiter, $line));
    }

    return $array;
}


$fileContents = file_get_contents('grid.txt');

$gridData = convertTo2dArray($fileContents, ' ', "\n");

$grid = new Grid($gridData);

$masks = [
    new Point(4, 0), // horizontal
    new Point(0, 4), // vertical
    new Point(4, 4), // diagonal 1
    new Point(-4, 4) // diagonal 2
];


$largest = -1;


for($y = 0; $y < $grid->getHeight(); $y++) {
    for($x = 0; $x < $grid->getWidth(); $x++) {

        $point = new Point($x, $y);

        foreach ($masks as $mask) {

            if($grid->onGrid($point->add($mask))) {

                $values = $grid->getValuesInDirection($point, $mask);

                $product = array_product($values);

                if($product > $largest) {
                    $largest = $product;
                }
            }
        }
    }
}

echo $largest;


