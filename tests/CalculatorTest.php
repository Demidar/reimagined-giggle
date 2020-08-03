<?php

namespace Test;

use App\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testSum(): void
    {
        $calculator = new Calculator();
        $this->assertEquals(25, $calculator->sum(10, 15));
    }
}
