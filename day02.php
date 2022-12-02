<?php
$input = explode(PHP_EOL, file_get_contents("day02input.txt"));
$tournament = [];
$score = 0;
$score2 = 0;

foreach ($input as $shape){
    $tournament = explode(" ", $shape);
    if ($tournament[0] == "A" && $tournament[1] == "X"){
        $score += (1 + 3);
        //need to lose; scissors (3)
        $score2 += (3 + 0);
    }
    if ($tournament[0] == "A" && $tournament[1] == "Y"){
        $score += (2 + 6);
        //need to draw; rock (1)
        $score2 += (1 + 3);
    }
    if ($tournament[0] == "A" && $tournament[1] == "Z"){
        $score += (3 + 0);
        //need to win; paper (2)
        $score2 += (2 + 6);
    }
    if ($tournament[0] == "B" && $tournament[1] == "X"){
        $score += (1 + 0);
        //need to lose; rock (1)
        $score2 += (1 + 0);
    }
    if ($tournament[0] == "B" && $tournament[1] == "Y"){
        $score += (2 + 3);
        //need to draw; paper (2)
        $score2 += (2 + 3);
    }
    if ($tournament[0] == "B" && $tournament[1] == "Z"){
        $score += (3 + 6);
        //need to win; scissor (3)
        $score2 += (3 + 6);
    }
    if ($tournament[0] == "C" && $tournament[1] == "X"){
        $score += (1 + 6);
        //need to lose; paper (2)
        $score2 += (2 + 0);
    }
    if ($tournament[0] == "C" && $tournament[1] == "Y"){
        $score += (2 + 0);
        //need to draw; scissors (3)
        $score2 += (3 + 3);
    }
    if ($tournament[0] == "C" && $tournament[1] == "Z"){
        $score += (3 + 3);
        //need to win; rock (1)
        $score2 += (1 + 6);
    }
}

echo "Part one: " . $score . "<br>";
echo "Part two: " . $score2;