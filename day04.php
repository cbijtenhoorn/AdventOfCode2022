<?php
$input = explode(PHP_EOL, file_get_contents("day04input.txt"));
$input = str_replace(",", "-", $input);
$pairs = [];

foreach ($input as $pair){
    $pairs[] = explode("-", $pair);
}

for ($i = 0; $i < count($pairs); $i++){
    if ($pairs[$i][0] <= $pairs[$i][2] && $pairs[$i][1] >= $pairs[$i][3]){
        $counter ++;
    }
    elseif ($pairs[$i][0] >= $pairs[$i][2] && $pairs[$i][1] <= $pairs[$i][3]){
        $counter++;
    }
    elseif ($pairs[$i][1] >= $pairs[$i][2] && $pairs[$i][0] <= $pairs[$i][3]){
        $counter2++;
    }
    elseif ($pairs[$i][0] <= $pairs[$i][3] && $pairs[$i][1] >= $pairs[$i][2]){
        $counter2++;
    }
}

echo "Part one: " . $counter . "<br>";
echo "Part two: " . ($counter + $counter2) . "<br>";