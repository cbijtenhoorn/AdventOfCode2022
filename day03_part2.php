<?php
include "functions.php";
$input = explode(PHP_EOL, file_get_contents("day03input.txt"));
$groups =[];
$items = [];

foreach ($input as $bag) {
    $groups[] = str_split($bag);
}

for ($i = 0; $i < count($groups); $i+=3){
        $letter = implode(array_unique(array_intersect($groups[$i], $groups[($i+1)], $groups[($i+2)])));
        $items[] = $letter;
}

foreach($items as $item){
    if (ctype_upper($item)) {
        $priorities += (ord($item) - 38);
    }
    elseif (ctype_lower($item)){
        $priorities += (ord($item) - 96);
    }
}

echo "Part two: " . $priorities . "<br>";