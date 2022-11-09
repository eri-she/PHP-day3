<?php
for ($i=1; $i <= 100; $i++) { 
    if(!($i % 3) && !($i % 5)){
        echo "Full-Stack<br>";
    }
    elseif ($i % 3 == 0) {
        echo "Back-end<br>";
    }
    elseif ($i % 5 == 0) {
        echo "Front-end<br>";
    }
    else {
        echo $i . "<br>";
    }
}