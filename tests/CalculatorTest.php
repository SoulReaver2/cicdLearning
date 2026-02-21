<?php

use PHPUnit\Framework\TestCase;
use App\Calculator;

class CalculatorTest extends TestCase
{
    public function testTTC()
    {
        $calc = new Calculator();
        $this->assertEquals(120, $calc->calculateTTC(100));
    }
}
