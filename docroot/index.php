<?php

use Symfony\Component\HttpFoundation\Request;

/* @var $kernel \Symfony\Component\HttpKernel\HttpKernelInterface */
$kernel = include __DIR__ . '/../config/bootstrap.php';

$request = Request::createFromGlobals();
/* @var $response \Symfony\Component\HttpFoundation\Response */
$response = $kernel->handle($request);
$response->send();
