<?php

namespace App\pages;

use Symfony\Component\HttpFoundation\Request;

interface Page
{
    public function render(Request $request): void;
}
