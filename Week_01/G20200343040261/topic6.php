<?php
    class Solution {

        /**
         * @param Integer[] $nums
         * @return NULL
         */
        function moveZeroes(&$nums) {
            $len = count($nums);
            if($len <= 1) return $nums;
            $j = 0;
            for($i = 0; $i < $len - 1; $i++){
                if($nums[$i] != 0){
                    $temp = $nums[$i];
                    $nums[$i] = $nums[$j];
                    $nums[$j] = $temp;
                }
            }
            return $nums;
        }
    }