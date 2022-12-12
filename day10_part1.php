<?php
$input = explode(PHP_EOL, file_get_contents("day10input.txt"));
$cycle = 0;
$x = 1;
$signal = 0;

for ($i = 0; $i < count($input); $i++) {
    if (str_contains($input[$i], "noop")) {
        $cycle++;
        if ($cycle == 20 || $cycle == 60 || $cycle == 100 || $cycle == 140 || $cycle == 180 || $cycle == 220) {
            $signal += ($cycle*$x);
        }
    } else if (str_contains($input[$i], "addx")) {
        $cycle++;
        if ($cycle == 20 || $cycle == 60 || $cycle == 100 || $cycle == 140 || $cycle == 180 || $cycle == 220) {
            $signal += ($cycle*$x);
        }
        if (str_contains($input[$i], "addx")) {
            $cycle++;
            if ($cycle == 20 || $cycle == 60 || $cycle == 100 || $cycle == 140 || $cycle == 180 || $cycle == 220) {
                $signal += ($cycle*$x);
            }
        }
        $int_var = (int)filter_var($input[$i], FILTER_SANITIZE_NUMBER_INT);
        $x += $int_var;
    }
}
echo $signal;