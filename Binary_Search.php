<?php 
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     * Challenge: https://leetcode.com/problems/sort-an-array
     */
    function search($nums, $target) {
        $low = 0;
        $high = count($nums) - 1; 

        while ($low <= $high) {
            $mid = $low + (int)(($high - $low) / 2); 
            
            if ($nums[$mid] == $target) {
                return $mid;
            } elseif ($nums[$mid] < $target) {
                $low = $mid + 1;
            } else {
                $high = $mid - 1;
            }
        }

        return -1;
    }
}

// Example usage
$solution = new Solution();
$nums = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$target = 5;
$result = $solution->search($nums, $target);

if ($result != -1) {
    echo "Target found at index: $result\n";
} else {
    echo "Target not found in the array.\n";
}
