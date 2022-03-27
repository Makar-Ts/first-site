<?php 
    $array = [];
    for ($i = 0; $i < 20; $i++) { $array[] = rand(0, 100); }

    foreach ($array as $value) { echo $value ." "; } echo "<br>";

    $max = max($array); $max_id = 0;
    $min = min($array); $min_id = 0;
    for ($i = 0; $i < 20; $i++) {
        if ($array[$i] == $max) { $max_id = $i; }
        if ($array[$i] == $min) { $min_id = $i; } 
    }

    $array[$max_id] = $min;
    $array[$min_id] = $max;

    foreach ($array as $value) { echo $value ." "; }
?> 