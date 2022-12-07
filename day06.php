<?php
$input = file_get_contents("day06input.txt");

for ($i = 0; $i < strlen($input); $i++){
    $fourletters = $input[$i] . $input[$i+1] . $input[$i+2] . $input[$i+3];
    if (strlen(count_chars($fourletters, 3)) == 4){
        $answer1 = ($i+3+1);
        break;
    }
}

for ($i = 0; $i < strlen($input); $i++){
    $fourteenletters = $input[$i] . $input[$i+1] . $input[$i+2] . $input[$i+3]. $input[$i+4]. $input[$i+5]. $input[$i+6]. $input[$i+7]. $input[$i+8]. $input[$i+9]. $input[$i+10]. $input[$i+11]. $input[$i+12]. $input[$i+13];
    if (strlen(count_chars($fourteenletters, 3)) == 14){
        $answer2 = ($i+14);
        break;
    }
}

echo "Part one: " . $answer1 . "<br>";
echo "Part two: " . $answer2 . "<br>";