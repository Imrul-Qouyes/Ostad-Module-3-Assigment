<?php


$text = "The quick brown fox jumps over the lazy dog.";

function toLowerCase($txt){

  $lowerTxt = strtolower($txt);
  $replacedTxt = str_replace("brown", "red", $lowerTxt);

  return $replacedTxt;
}

echo toLowerCase($text);