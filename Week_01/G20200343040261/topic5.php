<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $arr = array();
        $len = count($nums);
        if($len <= 1) return false;
        for($i = 0; $i < $len; $i++){

            $n = $target - $nums[$i];
            if(in_array($n, $nums) && $n != $nums[$i]){
                $j = array_search($n, $nums);
                return array($i,$j);
            }elseif(in_array($n, $nums) && count(array_intersect($nums,[$n])) >= 2){
                $new_nums = array_intersect($nums, [$n]);
                next($new_nums);
                $j = key($new_nums);
                return array($i,$j);
            }
          
        }
       return $arr;
    }
}