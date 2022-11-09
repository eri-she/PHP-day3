<?php
$arr = [];

for ($i=0; $i < 20; $i+=2) { 
    array_push($arr, rand(-1000, 1000));
}

echo "<pre>";
var_dump($arr);
echo "</pre>";

function getMaxNumber($arr){
    $maxNumber = $arr[0];
    foreach ($arr as $currentNumber) {
        if ($currentNumber > $maxNumber) {
            $maxNumber = $currentNumber;
        }
    }
    return $maxNumber;
}

$highestValue = getMaxNumber($arr);
echo "The heighest value in the array is: $highestValue";