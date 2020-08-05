<?php

namespace App\pages;

use Symfony\Component\HttpFoundation\Request;

class Index implements Page
{
    public function render(Request $request): string
    {
        ob_start();
        echo "I'm sending hello to ".$request->query->get('name', 'you');
        return ob_get_clean();
    }
}
