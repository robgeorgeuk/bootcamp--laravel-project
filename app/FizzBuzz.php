<?php

namespace App;

class FizzBuzz
{
    public function forNumber(int $number) : string
    {
        $result = $number % 3 ? "" : "Fizz";
        $result .= $number % 5 ? "" : "Buzz";
        return $result ? $result : "{$number}";
    }
}
