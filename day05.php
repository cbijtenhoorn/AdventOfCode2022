<?php
include "functions.php";
$input = explode(PHP_EOL, file_get_contents("day05input.txt"));
$stacks = array(1 => "HCR", 2 => "BJHLSF", 3 => "RMDHJTQ", 4 => "SGRHZBJ", 5 => "RPFZTDCB", 6 => "THCG", 7 => "SNVZBPWL", 8 => "RJQGC", 9 => "LDTRHPFS");

foreach ($input as $line) {
    $procedures[] = array_values(array_filter(preg_split("(move | from | to )", $line)));
}

for ($j = 0; $j < count($procedures); $j++) {
    $amount = $procedures[$j][0];
    $from = $procedures[$j][1];
    $to = $procedures[$j][2];

    $crates = substr($stacks[$from], -$amount);
    $stacks[$from] = substr_replace($stacks[$from], "", -$amount);
    $stacks[$to] .= strrev($crates);
}

foreach ($stacks as $finalchar){
    $answer1 .= substr($finalchar, -1);
}

echo $answer1;