<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 24-Aug-18
 * Time: 09:41
 */

use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Controller\ControllerResolverInterface;
use Symfony\Component\HttpKernel\Event\GetResponseForExceptionEvent;
use Symfony\Component\HttpKernel\HttpKernel;
use Symfony\Component\HttpKernel\KernelEvents;

require __DIR__ . '/../vendor/autoload.php';

class DummyResolver implements ControllerResolverInterface {
    public function getController(Request $request) {
        return false;
    }
}

$event_dispatcher = new EventDispatcher();
$event_dispatcher->addListener(KernelEvents::EXCEPTION, function(GetResponseForExceptionEvent $event) {
    $response = new Response('Path "' . $event->getRequest()->getPathInfo() . '" not found in the app.', 404);
    $event->setResponse($response);
});

$kernel = new HttpKernel(
    $event_dispatcher,
    new DummyResolver()
);

$request = Request::createFromGlobals();
$response = $kernel->handle($request);
$response->send();
