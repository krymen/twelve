<?php

namespace Krymen\Twelve\Day01;

/**
 * Statistics calculator
 *
 * @author Krzysztof Menżyk <krzysztof@menzyk.net>
 */
class CalcStats
{
    /**
     * Calculates minimum value of given numbers
     *
     * @param array $numbers
     *
     * @return float
     */
    public function minimum(array $numbers)
    {
        return min($numbers);
    }

    /**
     * Calculates maximum value of given numbers
     *
     * @param array $numbers
     *
     * @return float
     */
    public function maximum(array $numbers)
    {
        return max($numbers);
    }

    /**
     * Calculates number of elements in the given array
     *
     * @param array $numbers
     *
     * @return integer
     */
    public function count(array $numbers)
    {
        return count($numbers);
    }

    /**
     * Calculates average value of given numbers
     *
     * @param array $numbers
     *
     * @return float
     */
    public function average(array $numbers)
    {
        return round(array_sum($numbers) / $this->count($numbers), 6);
    }
}
