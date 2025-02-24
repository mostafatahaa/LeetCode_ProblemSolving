<?php

#--------------------------- 1- Two Sum

// loop throw all indexs to get it's all values
// use one number to check if any other number can be add with it and return the target
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {

        for($i=0; $i <= count($nums); $i++) {
            foreach($nums as $index => $value) {
                $result = [];

                if($i === $index || $nums[$i] + $value !== $target) {
                    continue;
                }

                if($nums[$i] + $value === $target) {
                    $result = [$i,$index];
                }
                
                return $result;
            }
        }

    }
}

$newObject = new Solution();
$nums = [1, 5, 10, 6];

print_r($newObject->twoSum($nums, 16));