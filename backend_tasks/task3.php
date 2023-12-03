<?php

const PASS = 'Pass';
const FAIL = 'Fail';

$testCases = [
    [3, 2, 4],
    [5, 3, 21],
    [9, 1, 1],
    [4, 3, 15],
    [5, 6, 252],
    [5, 7, 462],
    [10, 0, 0.1],
    [6, 6, 462],
    [4, 4, 35],
    [3, 10, 220]
];

function factorial($n)
{
//    Using recursion, but it consumes memory, hence it goes down by memory limit
//    if ($n === 0 || $n === 1) {
//        return 1;
//    } else {
//        return $n * factorial($n - 1);
//    }

//    Non-recursive approach
    $result = 1;
    for ($i = 2; $i <= $n; $i++) {
        $result *= $i;
    }
    return $result;
}

function numWaysUsingRecursive($input1, $input2)
{
    $r1 = factorial($input1 + $input2 - 1);
    $r2 = factorial($input2 - 1);
    $r3 = factorial($input1);

    return $r1 / ($r2 * $r3);
}

function numWays($input1,$input2)
{
    $numerator = 1;
    $denominator = 1;
    for ($i = $input1 + $input2 - 1; $i > 0; $i--) {
        $numerator *= $i;
    }

    for ($i = $input2 - 1; $i > 0; $i--) {
        $denominator *= $i;
    }

    for ($i = $input1; $i > 0; $i--) {
        $denominator *= $i;
    }

    $ways = $numerator / $denominator;

    return $ways;
}

array_map(function ($testCase) {
    $numWays = numWaysUsingRecursive($testCase[0], $testCase[1]);

    $result = $numWays === $testCase[2] ? PASS : FAIL;

    echo "{$result} EXPECTED $testCase[2] GOT $numWays\n\n";
}, $testCases);
