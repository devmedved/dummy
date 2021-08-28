<?php

$counter = 0;

for ($string = 0; $string <= 999999; $string++) {

    $string = str_pad($string, 6, "0", STR_PAD_LEFT);

    if ($string[0] + $string[1] + $string[2] == $string[3] + $string[4] + $string[5]) {
        echo $string;
        echo "<br>";
        $counter++;
    }
}
$percentage = $counter / 999999 * 100;

echo "The total number of lucky tickets is: " . $counter . "<br>";
echo "The % of lucky tickets is: " . round($percentage, 2, PHP_ROUND_HALF_UP);


