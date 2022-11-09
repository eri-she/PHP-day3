<?php
// exercise 1
$i=0;
while($i<51)
{echo "$i name,";
$i++;}
// exercise 2
$numbers=[1,24,33,4,57,6,78,8,9,10];
foreach($numbers as $value)
       {
           echo "Value is $value <br/>";
       }
    //    exercise 3
    function calc ($number){
       echo max($number);
    }
    // calc($numbers);

    // exercise 4
for ($i=0; $i<50; $i++){
    if($i % 5 == 0 ){
        echo " $i is multiple of 5 <br>";
    }  
    else {
        echo "$i  <br>";
    }
}