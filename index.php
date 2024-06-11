<?php

// 1uzd
//echo "Hello World!";

// 2uzd
/*
$date = date('d-m-y');
echo $date;
*/

// 3uzd
/*
$number1 = 20;
$number2 = 30;
$sum = $number1 + $number2;
echo $sum;
*/

//4 uzd
/*
function check($number){
    if($number % 2 == 0){
    echo "Even";
    }
    else{
    echo "Odd";
    }
    }
    $number = readline("Enter a number: ");
    check($number)
*/

// 5 uzd
/*
$array = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
echo(max($array));
echo("\n");
echo(min($array));
*/

// 6 uzd
/*
function Reverse($str){
    return strrev($str);
}
$str = "Once open a jar of pickels. It was very good. I very enjoyed it.";
echo Reverse($str)
*/

// 7 uzd
/*
function Reverse($str){
    return strrev($str);
}
$str = readline("Please write a word: ");
$backwards_str = reverse($str);
if ($str == $backwards_str){
    echo "$str is a palindrome";
}
else{
    echo "$str not a Palindrome";
}
*/

// 8 uzd
echo(rand(0,10));
?>