<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 28-Aug-18
 * Time: 09:39
 */

use MyApp\Routing\ControllerResolver;
use MyApp\Routing\Route;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\GetResponseForExceptionEvent;
use Symfony\Component\HttpKernel\HttpKernel;
use Symfony\Component\HttpKernel\KernelEvents;

require __DIR__ . '/autoload.php';

$eventDispatcher = new EventDispatcher();
$eventDispatcher->addListener(
    KernelEvents::EXCEPTION, function (GetResponseForExceptionEvent $event) {
    $response = new Response(
        'Path "' . $event->getRequest()->getPathInfo() . '" not found in the app.',
        404
    );
    $event->setResponse($response);
}
);

$controllerResolver = new ControllerResolver();
$controllerResolver->add(
    new Route('~^/$~', ['MyApp\\Controller\\IndexController', 'indexAction'])
);

$kernel = new HttpKernel(
    $eventDispatcher,
    $controllerResolver
);

return $kernel;