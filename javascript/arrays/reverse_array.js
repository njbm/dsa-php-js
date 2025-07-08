/**
 * Problem: Reverse an array
 * Approach: Two-pointer swap
 * Time Complexity: O(n)
 * Space Complexity: O(1)
 */

function reverseArray(arr) {
    let left = 0;
    let right = arr.length - 1;

    while (left < right) {
        [arr[left], arr[right]] = [arr[right], arr[left]];
        left++;
        right--;
    }

    return arr;
}

// Example usage
const original = [1, 2, 3, 4, 5];
console.log(reverseArray(original));
