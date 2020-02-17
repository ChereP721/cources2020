<?php
declare(strict_types=1);

/**
 * @param int $number
 * @return int
 */
function sumLess(int $number): int
{
    $sum = 0;
    while ($number > 0) {
        $number--;
        $sum += $number;
    }

    return $sum;
}