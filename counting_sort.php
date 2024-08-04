<?php

function countingSort(array $arr)
{
    $maxValue = max($arr);

    $count = array_fill(0, $maxValue + 1, 0);

    // Count the occurrences of each number in the array
    while (count($arr) > 0) {
        $num = array_shift($arr);
        $count[$num]++;
    }

    //Build array again
    for ($i = 0; $i <= $maxValue; $i++) {
        while ($count[$i] > 0) {
            $arr[] = $i;
            $count[$i]--;
        }
    }

    return $arr;

}

$unsortedArr = [4, 2, 2, 6, 3, 3, 1, 6, 5, 2, 3];
$sortedArr = countingSort($unsortedArr);
echo "Sorted array: " . implode(", ", $sortedArr);