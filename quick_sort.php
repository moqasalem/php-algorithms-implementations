<?php

function quickSort(array &$array, $low = 0, $high = null): array
{
    if ($high === null) {
        $high = count($array) - 1;
    }

    if ($low < $high) {
        $pivot_index = partition($array, $low, $high);
        quickSort($array, $low, $pivot_index - 1);
        quickSort($array, $pivot_index + 1, $high);
    }

    return $array;
}

function partition(array &$array, $low, $high): int
{
    $pivot = $array[$high];
    $i = $low - 1;

    for ($j = $low; $j < $high; $j++) {
        if ($array[$j] <= $pivot) {
            $i++;
            if ($i !== $j) { // Only swap if indices are different
                swap($array[$j], $array[$i], $j, $i);
            }
        }
    }

    if ($i + 1 !== $high) { // Only swap if indices are different
        swap($array[$i + 1], $array[$high], $i + 1, $high);
    }
    return $i + 1;
}

function swap(&$x, &$y, $indexX, $indexY)
{
    echo "Swapping elements at index $indexX and $indexY: $x <-> $y\n";
    $temp = $x;
    $x = $y;
    $y = $temp;
}

$my_array = [64, 34, 25, 12, 22, 11, 90, 5];

print_r(quickSort($my_array));

