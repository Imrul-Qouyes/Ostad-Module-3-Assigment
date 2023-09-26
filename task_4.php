<?php


$studentGrades = [

  "Student-1" => [
    "Math" => 84,
    "English" => 70,
    "Science" => 75
  ],
  "Student-2" => [
    "Math" => 70,
    "English" => 58,
    "Science" => 66
  ],
  "Student-3" => [
    "Math" => 69,
    "English" => 50,
    "Science" => 60
  ]

];




function calculateGrades($studentGrades)
{

  foreach ($studentGrades as $student => $details) {
    echo "{$student}" . PHP_EOL;

    foreach ($details as $subject => $marks) {
      echo "{$subject}: {$marks}" . PHP_EOL;

    }
    $averageMarks = (array_sum($details) / 3);
    echo "Average Grade is: ";

    if ($averageMarks >= 80 && $averageMarks <= 100) {

      echo "A+" . PHP_EOL . PHP_EOL;

    } else if ($averageMarks >= 70 && $averageMarks < 80) {

      echo "A" . PHP_EOL . PHP_EOL;

    } else if ($averageMarks >= 60 && $averageMarks < 70) {

      echo "A-" . PHP_EOL . PHP_EOL;

    } else if ($averageMarks >= 50 && $averageMarks < 60) {

      echo "B" . PHP_EOL . PHP_EOL;

    } else if ($averageMarks >= 40 && $averageMarks < 50) {

      echo "C" . PHP_EOL . PHP_EOL;

    } else if ($averageMarks >= 33 && $averageMarks < 40) {

      echo "D" . PHP_EOL . PHP_EOL;

    } else if ($averageMarks >= 0 && $averageMarks < 33) {

      echo "F" . PHP_EOL . PHP_EOL;
    }

  }

}

calculateGrades($studentGrades);