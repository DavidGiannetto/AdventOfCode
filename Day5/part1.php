<?php

$file = fopen('input.txt', 'r');
$total = 0;
if ($file) {
  while ($line = fgets($file)) {
    $match = preg_match('/(.)*([aeiou]+)(.)*([aeiou]+)(.)*([aeiou]+)(.)*/', $line);
    if ($match) {
      $match = preg_match('/(.)*([a-z]){1}(\2){1}(.)*/', $line);
    }
    if ($match) {
      $match = preg_match('/.*(ab|cd|pq|xy).*/', $line) ? 0 : 1;
    }
    $total += $match;
  }
}

echo "Nice Strings: " . $total . "\n";
