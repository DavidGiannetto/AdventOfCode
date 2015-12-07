<?php

$file = fopen('input.txt', 'r');
$total = 0;
if ($file) {
  while ($line = fgets($file)) {
    $match = preg_match('/.*([a-z]{2}).*(\1).*/', $line);
    if ($match) {
      $match = preg_match('/.*([a-z]{1})([a-z]{1})(\1).*/', $line);
    }
    $total += $match;
  }
}

echo "Nice Strings: " . $total . "\n";
