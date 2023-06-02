<?php

class NumberPairsFinder {
    
    /**
     * Find pairs of integers from a list that sum to a given value.
     *
     * @param $numbers List of numbers.
     * @param int $targetSum Target sum.
     * @return array List of pairs.
     */
    public static function findPairs($numbers, int $targetSum) {
        $pairs = [];

        // We ensure that it is an Array of elements.
        if (!empty($numbers) && is_string($numbers)) {
            $numbers = explode(',', $numbers);
        }
        $length = count($numbers);
        
        // Iterate through each number in the list.
        for ($i = 0; $i < $length; $i++) {
            // Iterate through the remaining numbers.
            for ($j = $i + 1; $j < $length; $j++) {
                // Check if the pair of numbers sums to the target sum.
                if ($numbers[$i] + $numbers[$j] == $targetSum) {
                    // Add the pair to the result.
                    $pairs[] = array($numbers[$i], $numbers[$j]);
                }
            }
        }
        
        return $pairs;
    }

}

?>
