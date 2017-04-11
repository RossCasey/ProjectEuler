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


}