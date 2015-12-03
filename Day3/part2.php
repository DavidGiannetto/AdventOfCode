<?php

$input = file_get_contents('input.txt');

$houses = [0 => [0 => 1]];
$santaX = 0;
$santaY = 0;
$roboX = 0;
$roboY = 0;
$houseCount = 0;

for ($i = 0; $i < strlen($input); $i++) {
  $char = substr($input, $i, 1);

  if (!($i % 2)) { //santa
    if ($char == '>') {
      $santaX++;
    } elseif ($char == '<') {
      $santaX--;
    } elseif ($char == '^') {
      $santaY++;
    } elseif ($char == 'v') {
      $santaY--;
    }

    if (!is_null($houses[$santaX][$santaY])) {
      $houses[$santaX][$santaY]++;
    } else {
      $houses[$santaX][$santaY] = 1;
    }
  } else { //roboSanta
    if ($char == '>') {
      $roboX++;
    } elseif ($char == '<') {
      $roboX--;
    } elseif ($char == '^') {
      $roboY++;
    } elseif ($char == 'v') {
      $roboY--;
    }

    if (!is_null($houses[$roboX][$roboY])) {
      $houses[$roboX][$roboY]++;
    } else {
      $houses[$roboX][$roboY] = 1;
    }
  }
}

foreach ($houses as $key => $value) {
  $houseCount += count($value);
}

echo "Houses: " . $houseCount . "\n";
