<?php 

$my_array = [64, 34, 25, 5, 22, 11, 90, 12];

$n = count($my_array);

for($i=0; $i<$n; $i++){
    $min_index = $i;
    for($j=$i+1; $j<$n; $j++){
        if($my_array[$j]<$my_array[$min_index])
        {
            $min_index = $j;
        }
    }

    //Removing the Minimum Element
    $min_value = array_splice($my_array, $min_index, 1)[0];
    //Inserting the Minimum Element
    array_splice($my_array, $i, 0, $min_value);

}

echo "Sorted array: ";
print_r($my_array);

