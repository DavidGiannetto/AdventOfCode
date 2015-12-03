<?php

$input = file_get_contents('input.txt');

$houses = [0 => [0 => 1]];
$x = 0;
$y = 0;
$houseCount = 0;

for ($i = 0; $i < strlen($input); $i++) {
  $char = substr($input, $i, 1);


  if ($char == '>') {
    $x++;
  } elseif ($char == '<') {
    $x--;
  } elseif ($char == '^') {
    $y++;
  } elseif ($char == 'v') {
    $y--;
  }

  if (!is_null($houses[$x][$y])) {
    $houses[$x][$y]++;
  } else {
    $houses[$x][$y] = 0;
  }
}

foreach ($houses as $key => $value) {
  $houseCount += count($value);
}

echo "Houses: " . $houseCount . "\n";
