<?php


namespace Problems\Problem11\Src;


class Grid
{
    private $height;


    private $width;


    private $grid;


    public function __construct(array $grid)
    {
        $this->grid = $grid;

        $this->height = count($grid);

        $this->width = count($grid[0]);
    }


    /**
     * Returns true if $point + $mask is still in the grid
     *
     * @param Point $point
     * @return bool
     */
    public function onGrid(Point $point): bool
    {
        if(($point->x > $this->width) || ($point->x < 0)) {
            return false;
        }

        if(($point->y > $this->height) || ($point->y < 0)) {
            return false;
        }

        return true;
    }


    /**
     * Returns value at given point
     *
     * @param Point $point
     * @return int
     */
    public function getValue(Point $point): int
    {
        return $this->grid[$point->y][$point->x];
    }


    /**
     * @param Point $point
     * @param Point $vector
     * @return array
     */
    public function getValuesBetween(Point $point, Point $vector): array
    {
        $steps = max(abs($vector->x), abs($vector->y));

        $xStep = $vector->x / $steps;

        $yStep = $vector->y / $steps;

        $values = [];

        for($i=0; $i < $steps; $i++) {

            $nextPoint = new Point($point->x + ($xStep * $i), $point->y + ($yStep * $i));

            $value = $this->getValue($nextPoint);

            array_push($values, $value);
        }

        return $values;
    }
}