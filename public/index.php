<?php

use Symfony\Component\HttpFoundation\Request;

require '../vendor/autoload.php';

$request = Request::createFromGlobals();

echo "I'm sending hello to ".$request->query->get('name', 'you');
