<?php
//Task-1
$length = 10;
$width = 5;

echo "Length: $length, Width: $width";

$area = ($length * $width);
echo "The area is $area";

$perimeter = 2*($length + $width);
echo "the perimeter is: $perimeter";


//t-2
$amount = 1500;
$vat = $amount+($amount*(15/100));
echo "Value after adding tax: $vat";

//t-3
$num = 7;
if($num%2 == 0){
    echo "The number is even";
}else{echo "The number is odd";}

//t-4
$num1 = 32;
$num2 = 23;
$num3 = 43;

if($num1 >= $num2 && $num1 <= $num3){
    echo "Largest number is: $num1";
}elseif($num2<=$num1 && $num2 <=$num3){
    echo "Largest number: $num2";
}else{
    echo "Largest number: $num3";
}

//t-5
echo "The odd num between 10-100";
for($i = 10; $i<=100; $i++){
    if($i%2 == 1){
        echo "$i ,";
    }
}

//t-6
$array = array(21,32, 54, 41, 19);
$toSearch = 41;
$flag = false;

for($i=0; $i<count($array); $i++){
    if($array[$i]== $toSearch){
        echo "Found $toSearch at index $i";
        $flag = true;
        break;
    }
}if(!$flag){
    echo "Not foundd!";
}

//t-7-symbol

for($i = 0; $i<=2; $i++){
    for($j = 0; $j<=$i; $j++){
        echo "*";
    }
}

//t-7-num
for($i = 0; $i<=2; $i++){
    for($j = $i; $j>=0; $j--){
        echo "$j ";
    }
}

//t-7-char

//t-8
$arr2d = array(array(1,2,3,'A'),array(1,2,'B','C'),array(1,'D','E','F'));



?>

