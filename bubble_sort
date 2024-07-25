<?php

//$my_array = [64, 34, 25, 12, 22, 11, 90, 5];
$my_array = [7, 3, 9, 12, 11];


$n = count($my_array);
for ($i = 0; $i < $n; $i++) {
    $swapped = false;
    for ($j = 0; $j < $n - $i-1; $j++) {
        if ($my_array[$j] > $my_array[$j+1]) {
            $temp = $my_array[$j];
            $my_array[$j] = $my_array[$j+1];
            $my_array[$j+1] = $temp;
            $swapped = true;
            echo sprintf("swapped:[%d,%d]=> [%d,%d]" . PHP_EOL, $my_array[$j+1], $my_array[$j],$my_array[$j], $my_array[$j+1]);
        }
    }

    if (!$swapped)
        break;
}

echo print_r($my_array);
