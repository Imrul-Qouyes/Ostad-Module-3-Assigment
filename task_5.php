<?php


function generatePassword($length)
{

  $allChars = 'ABCDEFGHIJKLMONPQRSTUVWXYZabcdefghijklmonpqrstuvwxyz0123456789!@#$%^&*()_+';

  $genpassword = '';

  for ($i = 0; $i < $length; $i++) {
    $genpassword = $genpassword . $allChars[rand(0, strlen($allChars) - 1)];

  }
  return $genpassword;

}


echo generatePassword(12);