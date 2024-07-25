<?php 
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function sortArray($nums) {

        $this->mergeSort($nums,0,count($nums)-1);
        return $nums;
    }

    public function mergeSort(&$nums,$left,$right){
        if($left<$right){
        $mid = floor(($left + $right)/2);
            
        $this->mergeSort($nums,$left,$mid);
        $this->mergeSort($nums,$mid+1,$right);

        $this->merge($nums,$left,$mid,$right);
        }
       
    }

    function merge(&$nums, $left ,$mid ,$right)
    {
      $n1 = $mid - $left +1;
      $n2 = $right - $mid;
      $leftArray = array_slice($nums, $left, $n1 );
      $rightArray = array_slice($nums, $mid +1,$n2 );

      $i = 0; // for left indexes
      $j = 0; // for right indexes
      $k = $left;
      // Merge the two arrays into $nums
      while($i < count($leftArray)&& $j < count($rightArray))
      {
        if($leftArray[$i]<= $rightArray[$j]){
            $nums[$k] = $leftArray[$i];
            $i++;
        }
        else {
            $nums[$k]= $rightArray[$j];
            $j++;
        }
        $k++;
      }

    // Copy any remaining elements of leftArray
    while($i<count($leftArray)){
        $nums[$k]= $leftArray[$i];
        $i++;
        $k++;
      }
    // Copy any remaining elements of rightArray
    while($j<count($rightArray)){
        $nums[$k]= $rightArray[$j];
        $j++;
        $k++;
      }
    }

}

// Example usage
$solution = new Solution();
$nums = [5, 2, 3, 1];
$sortedNums = $solution->sortArray($nums);
print_r($sortedNums); // Output should be [1, 2, 3, 5]
