<?php
class Solution{
        /**
         * @param Integer[] $digits
         * @return Integer[]
         */
        function plusOne($digits) {
            $n = count($digits);
            if($n == 0) return $digits;
            for($i = $n - 1; $i >=0; $i--){
                if($digits[$i] < 9){
                    $digits[$i] += 1;
                    return $digits;
                }
                $digits[$i] = 0;
            }
            $digits[$n+1] = 0;
            $digits[0] = 1;
           return $digits;
        }
}