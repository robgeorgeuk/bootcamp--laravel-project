<?php

namespace App;

class RomanNumeral
{
    private $dictionary = [
        1000 => "M",
        900 => "CM",
        500 => "D",
        400 => "CD",
        100 => "C",
        90 => "XC",
        50 => "L",
        40 => "XL",
        10 => "X",
        9 => "IX",
        5 => "V",
        4 => "IV",
        1 => "I",
    ];

    public function forNumber(int $number) : string
    {
        // keep track of result
        $result = "";

        foreach ($this->dictionary as $value => $numeral) {
            // while number is bigger than or equal to
            // the current dictionary value
            while ($number >= $value) {
                // concatenate the numeral onto the result
                $result .= $numeral;

                // subtract the value from number
                $number -= $value;
            }
        }

        // return final result
        return $result;
    }
}
