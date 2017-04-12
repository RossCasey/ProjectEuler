<?php


namespace Problems\Problem12\Src;


use Iterator;


class TriangleNumberIterator implements Iterator
{
    private $index = 1;


    private $lastAdded = 1;


    private $sum = 1;



    public function rewind()
    {
        $this->index = 1;

        $this->lastAdded = 1;

        $this->sum = 1;
    }


    public function current()
    {
        return $this->sum;
    }


    public function key()
    {
        return $this->index;
    }


    public function next()
    {
        $this->lastAdded++;

        $this->sum += $this->lastAdded;

        $this->index++;

        return $this->sum;
    }


    public function valid()
    {
        return true;
    }
}