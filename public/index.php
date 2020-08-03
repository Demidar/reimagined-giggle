<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

require '../vendor/autoload.php';

$routes = new RouteCollection();
$routes->add('index', new Route('/'));
$routes->add('sum', new Route('/sum'));

$request = Request::createFromGlobals();

$context = new RequestContext();
$context->fromRequest($request);
$matcher = new UrlMatcher($routes, $context);

try {
    $routeAttributes = $matcher->match($request->getPathInfo());
    $route = $routeAttributes['_route'];
    ob_start();
    $pageNamespace = sprintf('\\App\\pages\\%s', ucfirst($route));
    $page = (new $pageNamespace)->render($request);

    $response = new Response(ob_get_clean());
} catch (ResourceNotFoundException $exception) {
    $response = new Response('Not Found', 404);
} catch (Exception $exception) {
    $response = new Response('An error occured', 500);
}

$response->send();
