<?php
function checkEvenOrOddNumber(){
    $number = readline("Enter the number :- ");
    if($number % 2 == 0)
        echo "$number is even number";
    else
        echo "$number is odd number";
}
checkEvenOrOddNumber();
?>