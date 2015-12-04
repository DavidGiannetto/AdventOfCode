<?php

$input = 'iwrupvqb';
$found = false;
$i = 1;

while (!$found) {
  $string = $input . $i;
  $md5 = md5($string);

  if (substr($md5, 0, 6) === "000000") {
    $found = true;
  } else {
    $i++;
  }
}

echo "Number = " . $i . "\n";
