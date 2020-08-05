<?php

namespace App\pages;

use App\Calculator;
use Symfony\Component\HttpFoundation\Request;

class Sum implements Page
{
    public function render(Request $request): string
    {
        $a = $request->query->getInt('a', 0);
        $b = $request->query->getInt('b', 0);

        $calculator = new Calculator();
        $sum = $calculator->sum($a, $b);

        ob_start();
        echo "Sum of $a and $b is $sum";
        return ob_get_clean();
    }
}
