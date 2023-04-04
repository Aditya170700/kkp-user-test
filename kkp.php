<?php

function fizzBuzz(int $number)
{
  for ($i = 1; $i <= $number; $i++) {
    if ($i % 5 == 0) {
      echo "{$i} => FizzBuzz" . PHP_EOL;
    } else if ($i % 2 == 0) {
      echo "{$i} => Buzz" . PHP_EOL;
    } else {
      echo "{$i} => Fizz" . PHP_EOL;
    }
  }
}



fizzBuzz(10);


function segitiga(int $number)
{
  for ($i = 1; $i <= $number; $i++) {
    for ($j = 0; $j <= $number; $j++) {
      if ($j < $i) {
        echo "*";
      }
    }
    echo PHP_EOL;
  }

  for ($i = 1; $i <= $number; $i++) {
    for ($j = 0; $j <= $number; $j++) {
      if ($j > $i) {
        echo "*";
      }
    }
    echo PHP_EOL;
  }
}

segitiga(10);


// - user
//   - id

// - tiket
//   - id
//   - kuota
//   - waktu

// - order
//   - id
//   - user_id
//   - tiket_id
//   - status

// 25 * 13 * 60 * 12

// 390000