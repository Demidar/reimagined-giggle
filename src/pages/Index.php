<?php

namespace App\pages;

use Symfony\Component\HttpFoundation\Request;

class Index implements Page
{
    public function render(Request $request): void
    {
        echo "I'm sending hello to ".$request->query->get('name', 'you');
    }
}
