<?php
for ($i=1; $i <= 100; $i++) { 
    switch ($i){
        case (!($i % 3) && !($i % 5)):
            echo "Full-Stack<br>";
            break;
        case (!($i % 3)):
            echo "Back-end<br>";
            break;
        case (!($i % 5)):
            echo "Front-end<br>";
            break;
        default:
            echo $i . "<br>";
    }

   // Alternative with if-elseif statement:
    // if(!($i % 3) && !($i % 5)){
    //     echo "Full-Stack<br>";
    // }
    // elseif (!($i % 3)) {
    //     echo "Back-end<br>";
    // }
    // elseif (!($i % 5)) {
    //     echo "Front-end<br>";
    // }
    // else {
    //     echo $i . "<br>";
    // }

}