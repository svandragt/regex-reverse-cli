<?php
require ('vendor/autoload.php');
use RegRev\RegRev;

$regex = $_SERVER['argv'][1] ?? '';
if (empty($regex)) {
  echo 'Expected regex missing' . PHP_EOL;
  return;
}
echo "regex: $regex" . PHP_EOL;

for($i=0; $i<10; $i++) {
  echo RegRev::generate($regex) . PHP_EOL; //ouput a random number
}
