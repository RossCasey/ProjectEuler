<?php


namespace Problems\Problem11\Src;


class Point
{
    public $x;


    public $y;


    public function __construct(int $x, int $y)
    {
        $this->x = $x;

        $this->y = $y;
    }


    /**
     * Adds the point to the current point and returns new point
     *
     * @param Point $point
     * @return Point
     */
    public function add(Point $point): Point
    {
        return new Point($this->x + $point->x, $this->y + $point->y);
    }
}