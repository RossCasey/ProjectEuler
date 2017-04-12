<?php

require_once "../../vendor/autoload.php";


use Problems\Problem12\Src\TriangleNumberIterator;
use Libraries\Math;


$iter = new TriangleNumberIterator;

while(Math::countDivisors($iter->next()) <= 500);

echo $iter->current();