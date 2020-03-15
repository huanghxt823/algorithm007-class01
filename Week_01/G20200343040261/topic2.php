<?php
class Solution {

  /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return NULL
     */
    function rotate(&$nums, $k) {
        $len = count($nums);
        /*for($i = 0; $i < $k; $i++){
            $cur = $nums[$len - 1];
            for($j = 0; $j < $len; $j++){
                $temp = $nums[$j];
                $nums[$j] = $cur;
                $cur = $temp;
            }
        }*/
        $k %= $len;
        $this->reverse($nums, 0, $len - 1);
        $this->reverse($nums, 0, $k - 1);
        $this->reverse($nums, $k, $len - 1);
    }

    function reverse(&$nums,$start, $end){
        for($i = $start; $i < $end; $i++){
            $temp = $nums[$i];
            $nums[$i] = $nums[$end];
            $nums[$end--] = $temp;
        }
    }
 }
?>