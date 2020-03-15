<?php
class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer $m
     * @param Integer[] $nums2
     * @param Integer $n
     * @return NULL
     */
    function merge(&$nums1, $m, $nums2, $n) {
        $j = $m - 1;
        $i = $n - 1;
        $k = $m + $n-1;
        while($j >= 0 && $i >=0){
            if($nums1[$j] > $nums2[$i]){
                $nums1[$k--] = $nums1[$j--];
            }else{
                $nums1[$k--] = $nums1[$i--];
            }
        }
        while($j >=0){
            $nums1[$k--] = $nums1[$j--];
        }
    }
}