<?php

$grades = [85,92,78,88,95];

function allGrades($grades){

  rsort($grades);

  return $grades;

}

print_r(allGrades($grades));