<?php

namespace App\pages;

use App\Calculator;
use Symfony\Component\HttpFoundation\Request;

class Sum implements Page
{
    public function render(Request $request): void
    {
        $a = $request->query->getInt('a', 0);
        $b = $request->query->getInt('b', 0);

        $calculator = new Calculator();
        $sum = $calculator->sum($a, $b);

        echo "Sum of $a and $b is $sum";
    }
}
