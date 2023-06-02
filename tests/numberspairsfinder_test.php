<?php
require('../classes/numberpairsfinder.php');

use PHPUnit\Framework\TestCase;

class FindPairsTest extends TestCase {
    public function testFindPairs() {
        // Test case 1: Basic example
        $numbers1 = [2, 4, 5, 6, 8, 10];
        $targetSum1 = 10;
        $expectedPairs1 = [[2, 8], [4, 6]];
        $this->assertEquals($expectedPairs1, NumberPairsFinder::findPairs($numbers1, $targetSum1));
        
        // Test case 2: Empty input
        $numbers2 = [];
        $targetSum2 = 5;
        $expectedPairs2 = [];
        $this->assertEquals($expectedPairs2, NumberPairsFinder::findPairs($numbers2, $targetSum2));
        
        // Test case 3: No pairs that sum to the target sum
        $numbers3 = [1, 2, 3, 4, 5];
        $targetSum3 = 10;
        $expectedPairs3 = [];
        $this->assertEquals($expectedPairs3, NumberPairsFinder::findPairs($numbers3, $targetSum3));
        
        // Test case 4: String input
        $numbers4 = "2,4,5,6,8,10";
        $targetSum4 = 10;
        $expectedPairs4 = [[2, 8], [4, 6]];
        $this->assertEquals($expectedPairs4, NumberPairsFinder::findPairs($numbers4, $targetSum4));
    }
}
