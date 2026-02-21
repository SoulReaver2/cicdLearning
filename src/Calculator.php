<?php

namespace App;

class Calculator
{
    public function calculateTTC(float $hours, float $taxRate = 0.20): float
    {
        return $hours * (1 + $taxRate);
    }
}
