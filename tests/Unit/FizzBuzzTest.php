<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\FizzBuzz;

class FizzBuzzTest extends TestCase
{
    public function testForNumber()
    {
        $fizzbuzz = new FizzBuzz();
        $this->assertSame("1", $fizzbuzz->forNumber(1));
        $this->assertSame("2", $fizzbuzz->forNumber(2));
        $this->assertSame("Fizz", $fizzbuzz->forNumber(3));
        $this->assertSame("4", $fizzbuzz->forNumber(4));
        $this->assertSame("Buzz", $fizzbuzz->forNumber(5));
        $this->assertSame("Fizz", $fizzbuzz->forNumber(6));
        $this->assertSame("Buzz", $fizzbuzz->forNumber(10));
        $this->assertSame("FizzBuzz", $fizzbuzz->forNumber(15));
    }
}
