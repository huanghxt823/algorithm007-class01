<?php
class Solution {

    /**
      * @param Integer[] $nums
      * @return Integer
      */
     /*function removeDuplicates(&$nums) {
         $len = count($nums);
         if($len < 2) return $len;
         $index = 0;
         for($i = 1; $i < $len; $i++){
             if($nums[$index] != $nums[$i])
                  $nums[++$index] = $nums[$i];
         }
         return ++$index;
     }*/
     function removeDuplicates(&$nums) {
         $len = count($nums);
         if($len < 2) return $len;
         $index = 1;
         for($i = 1; $i < $len; $i++){
             if($nums[$i] != $nums[$i-1])
                 $nums[$index++] = $nums[$i];
         }
         return $index;
     }
 }
?>