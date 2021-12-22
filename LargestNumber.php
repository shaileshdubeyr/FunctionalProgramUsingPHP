<?php
function checkGraterNumber(){
    $number1 = readline("Enter the number1 :- ");
    $number2 = readline("Enter the number2 :- ");
    $number3 = readline("Enter the number3 :- ");

    if($number1 > $number2 && $number1 > $number3)
        echo "$number1 is grater number";
    elseif($number2 > $number1 && $number2 > $number3)
        echo "$number2 is grater number";
    else
        "$number3 is grater number";
}
checkGraterNumber();
?>