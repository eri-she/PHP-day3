<?php
$arr = [];

for ($i=0; $i < 20; $i+=2) { 
    array_push($arr, $i);
}

foreach ($arr as $index => $value) {
    echo "$index -> $value<br>";
}