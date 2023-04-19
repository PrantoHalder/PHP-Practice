<?php
$arr = [1,2,3,4,5,6,7,8,9,10];
echo $arr[0];

echo $arr[1];
echo $arr[2];
echo $arr[3];
echo $arr[4];
echo $arr[5];
echo $arr[6];
echo $arr[7];
echo $arr[8];
echo $arr[9];


$arr1 = [
    'apple' => 1,
    'orange' => 2,
    'bananna' => 3
];
echo $arr1['apple'];

$empty_array = array();
$elemented_array = array(1,2,3);
var_dump($elemented_array);
$elemented_array[] = 4; 
var_dump($elemented_array);
echo $elemented_array[0];
var_dump($elemented_array);
print_r($elemented_array);
echo '<pre>';
print_r($elemented_array);
echo '<pre>';
$deleted_array = [1,2,3];
var_dump($deleted_array);
unset($deleted_array[1]);
var_dump($deleted_array);
echo count($deleted_array);
?>