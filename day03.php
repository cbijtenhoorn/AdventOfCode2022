<?php
$input = explode(PHP_EOL, file_get_contents("day03input.txt"));

$compartments = [];
$bagamount = count($input);
$items = [];
$priorities = 0;

foreach ($input as $bag) {
    $baglenght = strlen($bag);
    $compartments[] = str_split($bag, ($baglenght / 2));
}

for ($i = 0; $i < $bagamount; $i++) {
    $compartments[$i][0] = str_split($compartments[$i][0]);
    $compartmentsize = count($compartments[$i][0]);

    for ($j = 0; $j < $compartmentsize; $j++){
        if (str_contains($compartments[$i][1], $compartments[$i][0][$j])){
            $items[] = $compartments[$i][0][$j];
            break;
        }
    }
}

foreach($items as $item){
    if (ctype_upper($item)) {
        $priorities += (ord($item) - 38);
    }
    elseif (ctype_lower($item)){
        $priorities += (ord($item) - 96);
    }
}

echo "Part one: " . $priorities . "<br>";