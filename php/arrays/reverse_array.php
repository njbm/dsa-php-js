<?php
/**
 * Problem: Reverse an array
 * Approach: Two-pointer swap
 * Time Complexity: O(n)
 * Space Complexity: O(1)
 */

function reverseArray(array $arr): array {
    $left = 0;
    $right = count($arr) - 1;

    while ($left < $right) {
        [$arr[$left], $arr[$right]] = [$arr[$right], $arr[$left]];
        $left++;
        $right--;
    }

    return $arr;
}

// Example usage
$original = [1, 2, 3, 4, 5];
$reversed = reverseArray($original);
print_r($reversed);
