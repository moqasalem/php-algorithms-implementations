<?php 

$my_array = [64, 34, 25, 12, 22, 11, 90, 5];

$n = count($my_array);

echo "Original array: " . implode(", ", $my_array) . "\n\n";

for ($i = 1; $i < $n; $i++) {
    $insert_index = $i;  
    
    // Remove the element at the current position
    $current_value = array_splice($my_array, $i, 1)[0];
    
    // Store the previous state of the array
    $previous_array = $my_array;
    
    // Loop through the sorted portion of the array to find the correct insertion index
    for ($j = $i - 1; $j >= 0; $j--) {
        if ($my_array[$j] > $current_value) {
            $insert_index = $j;
        }
    }

    // Insert the current value at the found insertion index
    array_splice($my_array, $insert_index, 0, $current_value);
    
    // Print the step in the desired format
    echo implode(", ", $previous_array) . " => " . implode(", ", $my_array) . "\n";
}

echo "\nSorted array: " . implode(", ", $my_array) . "\n";

