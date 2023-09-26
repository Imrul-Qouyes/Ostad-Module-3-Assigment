<?php

$numbers = [1,2,3,4,5,6,7,8,9,10];

function removeEvenNumbers($number){

  if($number % 2 != 0){
    return true;
  }

}

$result = array_filter($numbers, "removeEvenNumbers");

print_r($result);