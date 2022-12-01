<?php
$input = explode(PHP_EOL, file_get_contents("day01input.txt"));

$calorielist = [];
$temp = 0;

foreach ($input as $calorie){
    if (is_numeric($calorie)){
        $temp += $calorie;
    }
    else{
        $calorielist[] = $temp;
        $temp = 0;
    }
}

rsort($calorielist);
echo "Part one: " . $calorielist[0] . "<br>";
echo "Part two: " . ($calorielist[0] + $calorielist[1] + $calorielist[2]);