<?php

$file = fopen('input.txt', 'r');
$lights = [];
$numLights = 0;

if ($file) {
  while ($line = fgets($file)) {
    $numbers = [];
    preg_match_all('/([0-9]){1,3}/', $line, $numbers);
    $x1 = (int)$numbers[0][0];
    $y1 = (int)$numbers[0][1];
    $x2 = (int)$numbers[0][2];
    $y2 = (int)$numbers[0][3];

    if (strpos($line, 'toggle') !== false) {
      for ($i = $x1; $i <= $x2; $i++) {
        for ($j = $y1; $j <= $y2; $j++) {
          if(isset($lights[$i][$j])) {
            unset($lights[$i][$j]);
          } else {
            $lights[$i][$j] = 1;
          }
        }
      }
    } elseif (strpos($line, 'turn off') !== false) {
      for ($i = $x1; $i <= $x2; $i++) {
        for ($j = $y1; $j <= $y2; $j++) {
          unset($lights[$i][$j]);
        }
      }
    } elseif (strpos($line, 'turn on') !== false) {
      for ($i = $x1; $i <= $x2; $i++) {
        for ($j = $y1; $j <= $y2; $j++) {
          $lights[$i][$j] = 1;
        }
      }
    } else {
      echo "ERROR!!!";
      die;
    }
  }
}

foreach ($lights as $x) {
  $numLights += count($x);
}

echo "Number of Lights: " . $numLights . "\n";
