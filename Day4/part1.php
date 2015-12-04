<?php

$input = 'iwrupvqb';
$found = false;
$i = 1;

while (!$found) {
  $string = $input . $i;
  $md5 = md5($string);

  if (substr($md5, 0, 5) === "00000") {
    $found = true;
  } else {
    $i++;
  }
}

echo "Number = " . $i . "\n";
