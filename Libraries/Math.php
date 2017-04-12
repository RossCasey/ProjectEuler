<?php


namespace Libraries;


class Math
{
    public static function isPrime(int $val): bool
    {
        $limit = intval(ceil(sqrt($val)));

        for($i=2; $i <= $limit; $i++) {
            if($val % $i === 0) {
                return false;
            }
        }

        return true;
    }


    public static function countDivisors(int $val): int
    {
        $limit = intval(ceil(sqrt($val)));

        $divisorCount = 0;

        for($i=1; $i <= $limit; $i++) {
            if($val % $i === 0) {

                if(intdiv($val, $i) === $i) {
                    $divisorCount += 1;
                } else {
                    $divisorCount += 2;
                }

            }
        }

        return $divisorCount;
    }


}